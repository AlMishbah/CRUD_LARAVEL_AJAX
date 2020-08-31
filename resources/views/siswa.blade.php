    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="text-center">
                    <h1>Data Siswa Menggunakan AJAX</h1>
                </div>
            </div>
            <div class="card-body">
                <table id="tableSiswa" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Nama Siswa</th>
                            <th>NIS</th>
                            <th>email</th>
                            <th>alamat</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#tableSiswa').DataTable({
                processing  : true,
                serverSide  : true,
                ajax    : {
                    url: "{{ route('siswa.index') }}",
                    type: 'GET'
                },
                columns: [
                    {data:'nama_siswa', name:'nama_siswa'},
                    {data:'nis', name:'nis'},
                    {data:'email', name:'email'},
                    {data:'alamat', name:'alamat'},
                ],
                order: [[0, 'asc']]
            });
        });

    </script>
