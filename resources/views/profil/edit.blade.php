@extends('profil.index')
@section('profil')
    @parent

    <form id="submit" class="submit-form" action="{{ url('profil/'.\Auth::user()->id) }}" method="POST">
        <input type="hidden" name="_method" value="PUT">
        {!! csrf_field() !!}

        <div class="row">
            <div class="col-md-6 col-sm-12">
                <label class="control-label">Nom de l'entreprise</label>
                <input type="text" class="form-control" name="name" required value="{{ \Auth::user()->name }}">
            </div>

            <div class="col-md-6 col-sm-12">
                <label class="control-label">Email</label>
                <input type="text" name="email" class="form-control" required value="{{ \Auth::user()->email }}">
            </div>
        </div>

        <hr class="invis">

        <div class="row">
            <div class="col-md-6 col-sm-12">
                <label class="control-label">Adresse</label>
                <input type="text" class="form-control" required value="{{ \Auth::user()->rue }}" name="rue">
            </div>
            <div class="col-md-6 col-sm-12">
                <label class="control-label">NPA</label>
                <input type="text" class="form-control" required value="{{ \Auth::user()->npa }}" name="npa">
            </div>
        </div><!-- end row -->

        <hr class="invis">

        <div class="row">
            <div class="col-md-6 col-sm-12">
                <label class="control-label">Complément d'adresse</label>
                <input type="text" name="complement" class="form-control" value="{{ \Auth::user()->complement }}">
            </div>
            <div class="col-md-6 col-sm-12">
                <label class="control-label">CP</label>
                <input type="text" name="cp" class="form-control" value="{{ \Auth::user()->cp }}">
            </div>
        </div><!-- end row -->

        <hr class="invis">

        <div class="row">
            <div class="col-md-6 col-sm-12">
                <label class="control-label">Téléphone</label>
                <input type="text" name="telephone" class="form-control" required value="{{ \Auth::user()->telephone }}">
            </div>
            <div class="col-md-6 col-sm-12">
                <label class="control-label">Fax</label>
                <input type="text" name="fax" class="form-control" value="{{ \Auth::user()->telephone }}">
            </div>
        </div><!-- end row -->

        <hr class="invis">

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <label class="control-label">Votre entreprise est présent sur les média sociaux</label>
                <textarea name="social" class="form-control">{{ \Auth::user()->social }}</textarea>
            </div>
        </div><!-- end row -->

        <hr class="invis">

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <label class="control-label">Site internet</label>
                <input type="text" class="form-control" name="website" value="{{ \Auth::user()->website }}">
            </div>
        </div><!-- end row -->

        <hr class="invis">
        <hr>
        <button class="btn btn-primary btn-block">Enregistrer</button>
    </form>

@endsection