@extends('admin.admin_master')

@section('title')
Add Blog
@endsection

@section('add-blog')

<div class="container pt-4 px-4">
    
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12 w-75">
        @if(Session::has('save_success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        {{Session::get('save_success')}}
    </div>
@endif
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Basic Form</h6>
                            <form action="{{url('add-blog')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" required oninvalid="this.setCustomValidity('Please fill out Title')" oninput="this.setCustomValidity('')">
                                    
                                </div>
                                <div class="mb-3" >
                                    <label for="exampleInputEmail1" class="form-label">Title</label>
                                    <textarea name="description" id="description" required oninvalid="this.setCustomValidity('Please fill out Description')" oninput="this.setCustomValidity('')">
                                        
                                    </textarea>
                                    
                                </div>
                                <div class="mb-3" >
                                    <!-- <label for="exampleInputEmail1" class="form-label">Title</label> -->
                                    <input type="file" name="image" id="image" class="form-control" required oninvalid="this.setCustomValidity('Please Choose file')" oninput="this.setCustomValidity('')">
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Topic</label>
                                    <select type="text" name="topic" class="form-control" id="topic" required oninvalid="this.setCustomValidity('Please fill out Topic')" oninput="this.setCustomValidity('')">
                                        <option selected value="">Choose Topic</option>
                                        <option value="Finance">Finance</option>
                                        <option value="Business">Business</option>
                                        <option value="Marketing">Marketing</option>
                                        <option value="Sales">Sales</option>
                                        <option value="Design and development">Design and development</option>
                                        <option value="Technology">Technology</option>
                                    </select>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" name="publish_status" class="form-check-input" id="exampleCheck1" value="1" required oninvalid="this.setCustomValidity('Please check out the publish state')" oninput="this.setCustomValidity('')">
                                    <label class="form-check-label" for="exampleCheck1">Publish</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
        </div>

@endsection

@section('script')
<script>
    tinymce.init({
      selector: 'textarea',
      
      plugins: 'anchor save autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ]
    });
  </script>
@endsection