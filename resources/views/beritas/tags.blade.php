<td>
    {{ $model['kategori']['kategori'] }}
    <ul>
        @foreach ($model['tags'] as $item)
        <li><span class="badge badge-info">{{ $item['nama'] }}</span></li>
        @endforeach
    </ul>
</td>