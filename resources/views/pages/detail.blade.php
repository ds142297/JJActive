<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JJ ACTIVE</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('admin/css/iziToast.min.css') }}" rel="stylesheet" type="text/css" />
    <style>
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <header class="d-flex align-items-center pb-3 mb-5 border-bottom" style="justify-content: space-between">
            <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
              <span class="fs-4">JJ ACTIVE</span>
            </a>
		<a href="{{route('logout')}}" class="btn btn-danger my-2">Logout</a>
          </header>
          <a href="{{route('excel')}}" type="button" class="btn btn-success my-2">Download Excel</a>
          <a href="{{route('send_certificate')}}" type="button" title="send certificate" class="btn btn-warning my-2">Send Certificate To All</a>
          <div style="width:100%;overflow:hidden;overflow-x:auto;">
        <table class="table table-striped table-hover" style="max-width: 1320px;width:1320px;" id="tbl_exporttable_to_xls">
            <thead>
              <tr class="table-primary">
                <th scope="col">E-BIB</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Emergency Contact Name</th>
                <th scope="col">Emergency Contact Number</th>
                <th scope="col">Address</th>
                <th scope="col">Created At</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data->items() as $item)
              <tr>
                <th scope="row">{{ $item->bib }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->phone }}</td>
                <td>{{ $item->cname }}</td>
                <td>{{ $item->cnumber }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->created_at }}</td>
                <td> <a href="{{route('send_certificate_single', $item->id)}}" type="button" title="send certificate" class="btn btn-info my-2">Send</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $data->links() }}
        </div>
          <footer class="pt-5 my-5 text-muted border-top">
            JJ ACTIVE &middot; &copy; 2022
          </footer>
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="{{ asset('admin/js/pages/iziToast.min.js') }}"></script>
<script type="text/javascript">
  @if (session('success'))

      iziToast.success({
          title: 'Success',
          message: '{{ session('success') }}',
          position: 'topRight',
          timeout:6000
      });

  @endif
  @if (session('error'))

      iziToast.error({
          title: 'Error',
          message: '{{ session('error') }}',
          position: 'topRight',
          timeout:6000
      });

  @endif

</script>
</html>
