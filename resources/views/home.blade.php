<script src="../templateEditor/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="../templateEditor/ckfinder/ckfinder.js"></script>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                    <div class="panel-body">
                            You are logged in!
                            <!-- @if (session('status'))
                             <div class="alert alert-success">
                             {{ session('status') }}
                            </div>
                            @endif
                             @if (session('warning'))
                            <div class="alert alert-warning">
                            {{ session('warning') }}
                             </div>
                            @endif -->
                            <form name= cked1>
                            <textarea name="editor1" id="editor1" rows="10" cols="80">
                            This is my textarea to be replaced with CKEditor.
                            </textarea>
                            <script>
                            // Replace the <textarea id="editor1"> with a CKEditor
                            // instance, using default configuration.
                            CKEDITOR.replace( 'editor1',
                            {
                                filebrowserBrowseUrl: '/browser/browse.php',
                                filebrowserUploadUrl: '/uploader/upload.php'
                            });

                            </script>
                            <input type="submit" value="insert"/>
                        
                        </form>
                        <?php 
                            //$data=$_GET['editor1'];
                             //print_r($data);
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
