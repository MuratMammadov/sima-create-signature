<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>QR Code Generator</title>
</head>

<body class="antialiased d-flex align-items-center justify-content-center vh-100">

    <div class="container col-2">
        <form action="{{route('generate')}}" method="post">
            <h5 class="text-center mb-2">QR Code Generator</h5>
            @csrf
            <div class="mb-3">
                <label for="asignee" class="form-label">Assignee:</label>
                <input type="text" class="form-control" id="asignee" name="asignee">
            </div>
            <div class="d-flex mb-2 ">
                <div class="form-check mb-2 me-5">
                    <input class="form-check-input" type="radio" name="option" id="auth" value="auth">
                    <label class="form-check-label" for="auth">Auth</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="option" id="sign" value="sign">
                    <label class="form-check-label" for="sign">Sign</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary col-12">Generate QR</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>