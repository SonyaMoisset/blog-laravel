@extends('main')

@section('title', '| Contact Me')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Contat Me</h1>
            <hr>

            <form action="">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" id="subject" name="subject" class="form-control">
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea type="text" id="message" name="message" class="form-control">Type your message here...</textarea>
                </div>
                <input type="submit" value="Send Message" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
