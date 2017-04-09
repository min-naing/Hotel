@extends('layout.master')

@section('title','Contact Us')
@section('nav','Contact Us')
@section('nav_name','Contact Us')
@section('content')


    <section id="content">
        <div class="container">
            <div id="main">
                <div class="form-group">
                    <h2 id="h2">Customer's Feedback</h2><br>
                    <label for="inputname3" class="col-sm-2 control-label">Name:</label>
                    <div class="col-sm-8">
                        <input type="text" class=" col-md-8 form-control" id="inputname3" placeholder="MgMg">
                    </div>
                </div><br><br>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email:</label>
                    <div class="col-sm-8">
                        <input type="email" class="col-md-8 form-control" id="inputEmail3"
                               placeholder="sweetlemon824@gmail.com">
                    </div>
                </div><br><br>
                <div class="form-group">
                    <label for="inputphone3" class="col-sm-2 control-label">Phone:</label>
                    <div class="col-sm-8">
                        <input type="text" class=" col-md-8 form-control" id="inputphone3" placeholder="09*********">
                    </div>
                </div><br><br>
                <div class="form-group">
                    <label for="inputsubject3" class="col-sm-2 control-label">Subject:</label>
                    <div class="col-sm-8">
                        <input type="text" class=" col-md-8 form-control" id="inputsubject3" placeholder="Title">
                    </div>
                </div><br><br>
                <div class="form-group">
                    <label for="inputcomment3" class="col-sm-2 control-label">Comment:</label>
                    <div class="col-sm-8">
                    <textarea name="" id="inputcomment3" class="form-control col-md-8" cols="25" rows="10"
                              placeholder="Here write comment">

                    </textarea>
                    </div>
                </div><br>
            </div>
        </div>
    </section>

    @endsection