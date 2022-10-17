<?php

namespace App\Http\Controllers;

use App\DataTables\UserDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\ProgramStudi;
use App\Repositories\UserRepository;
use Flash;
use Illuminate\Support\Facades\Hash;
use Response;
use Spatie\Permission\Models\Role;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Auth;

class UserController extends AppBaseController
{
    /** @var UserRepository $userRepository*/
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }

    /**
     * Display a listing of the User.
     *
     * @param UserDataTable $userDataTable
     *
     * @return Response
     */
    public function index(UserDataTable $userDataTable)
    {
        return $userDataTable->render('users.index');
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
        $prodi = ProgramStudi::pluck('nama', 'id');
        $sRoles= Role::orderBy('name')->get();
        $roles=[];
        return view('users.create', compact('prodi', 'sRoles', 'roles'));
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        $input = $request->except('photo');
        $date= Carbon::now()->format('Y_m_d');
        if($request->hasFile('photo')) {
            $foto = $request->file('photo');
            $filename = str_replace(" ", "_",$foto->getClientOriginalName());
            $filenames = $date.'_'.$filename;
            $path=$request->photo->storeAs('public/foto-profile', $filenames,'local');
            $input['photo']= 'storage' . substr($path, strpos($path, '/'));
        }
        $roles=[];
        if($request->has('s_role_id')){
            $roles=$input['s_role_id'];
        }
        // return $input;
        DB::transaction(function () use($input,$roles){
            $user = $this->userRepository->create($input);
            $user->syncRoles($roles);
            $user->password = Hash::make($input['password']);
            $user['tempat_lahir'] = $input['tempat_lahir'];
            $user['tanggal_lahir'] = $input['tanggal_lahir'];
            $user['agama'] = $input['agama'];
            $user['alamat'] = $input['alamat'];
            $user['telepon'] = $input['telepon'];
            $user['jenis_kelamin'] = $input['jenis_kelamin'];
            $user['photo'] = $input['photo'];
            // $user->username = str_replace(" ", "_", $input['username']);
            $user->save();
        },3);

        Flash::success('User saved successfully.');
        return redirect(route('users.index'));
    }

    /**
     * Display the specified User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user = $this->userRepository->find($id);
        if (empty($user)) {
            Flash::error('User not found');
            return redirect(route('users.index'));
        }
        return view('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $prodi = ProgramStudi::pluck('nama', 'id');
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');
            return redirect(route('users.index'));
        }
        $sRoles=Role::orderBy('name')->get();
        $roles=$user->roles->pluck('id')->toArray();

        return view('users.edit', compact('sRoles', 'roles'))->with('user', $user);
    }

    /**
     * Update the specified User in storage.
     *
     * @param int $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRequest $request)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        $user = $this->userRepository->update($request->all(), $id);

        Flash::success('User updated successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified User from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        $this->userRepository->delete($id);

        Flash::success('User deleted successfully.');

        return redirect(route('users.index'));
    }
}
