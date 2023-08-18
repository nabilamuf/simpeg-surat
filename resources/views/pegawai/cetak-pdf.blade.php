<table>
    <thead>
        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 162px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Id</th>
        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 248px;" aria-label="Position: activate to sort column ascending">NIP</th>
        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 116px;" aria-label="Office: activate to sort column ascending">Nama</th>
        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 116px;" aria-label="Office: activate to sort column ascending">Golongan</th>
        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 116px;" aria-label="Office: activate to sort column ascending">Fungsional</th>
        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 116px;" aria-label="Office: activate to sort column ascending">Unit Kerja</th>
        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 116px;" aria-label="Office: activate to sort column ascending">Jabatan</th>
        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 116px;" aria-label="Office: activate to sort column ascending">Tgl Lahir</th>
        
        {{-- <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 116px;" aria-label="Office: activate to sort column ascending">Pendidikan </th> --}}
        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 116px;" aria-label="Office: activate to sort column ascending">TMT</th>
        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 116px;" aria-label="Office: activate to sort column ascending">TMT SK</th>
        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 116px;" aria-label="Office: activate to sort column ascending">TMT Masuk</th>
        
        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 116px;" aria-label="Office: activate to sort column ascending">Jenis Kelamin</th>
        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 116px;" aria-label="Office: activate to sort column ascending">Aksi</th>
      </thead>
      <tbody>
        @foreach($pegawai as $p)
          <tr role="row" class="odd">
            <td>{{$p->id}}</td>
            <td>{{$p->nip}}</td>
            <td>{{$p->nama}}</td>
            <td>{{$p->golongan->nama}}</td>
            <td>{{ $p->fungsional->nama }}</td>
            <td>{{ $p->unit->nama }}</td>
            <td>{{ $p->jabatan->nama }}</td>
            <td>{{$p->tgl_lahir}}</td>
            {{-- <td>{{$p->pendidikan}}</td> --}}
            <td>{{$p->tmt}}</td>
            <td>{{$p->tmt_sk}}</td>
            <td>{{$p->tmt_masuk}}</td>
            <td>{{$p->j_kelamin}}</td>
          </tr>
        @endforeach
      </tbody>
</table>