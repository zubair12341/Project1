<!DOCTYPE html>
<html>
<head>
    <title>How to Create Multi Language Website in Laravel - ItSolutionStuff.com</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
  
        <div class="card">
          <div class="card-header">
            <h1>Laravel Google Translate Example - ItSolutionStuff.com</h1>
          </div>
          <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <strong>Select Language: </strong>
                    </div>
                    <div class="col-md-4">
                        <select class="form-select changeLang">
                            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                            <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>France</option>
                            <option value="es" {{ session()->get('locale') == 'es' ? 'selected' : '' }}>Spanish</option>
                        </select>
                    </div>
                </div>
              
                <h3>{{ GoogleTranslate::trans('Welcome to ItSolutionStuff.com', app()->getLocale()) }}</h3>
                <h3>{{ GoogleTranslate::trans('Hello World', app()->getLocale()) }}</h3>
          </div>
        </div>
      
    </div>
</body>
    
<script type="text/javascript">
    
    var url = "{{ route('changeLang') }}";
    
    $(".changeLang").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });
    
</script>
</html>