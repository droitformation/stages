@extends('profil.index')
@section('profil')
    @parent

    <form id="submit" class="submit-form">

        <div class="row">
            <div class="col-md-6 col-sm-12">
                <label class="control-label">Nom de l'entreprise</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>

            <div class="col-md-6 col-sm-12">
                <label class="control-label">Email</label>
                <input type="text" name="email" class="form-control" placeholder="">
            </div>
        </div>

        <hr class="invis">

        <div class="row">
            <div class="col-md-6 col-sm-12">
                <label class="control-label">Adresse</label>
                <input type="text" class="form-control" placeholder="" name="rue">
            </div>
            <div class="col-md-6 col-sm-12">
                <label class="control-label">NPA</label>
                <input type="text" class="form-control" placeholder="" name="npa">
            </div>
        </div><!-- end row -->

        <hr class="invis">

        <div class="row">
            <div class="col-md-6 col-sm-12">
                <label class="control-label">Complément d'adresse</label>
                <input type="text" name="complement" class="form-control" placeholder="">
            </div>
            <div class="col-md-6 col-sm-12">
                <label class="control-label">CP</label>
                <input type="text" name="cp" class="form-control" placeholder="">
            </div>
        </div><!-- end row -->

        <hr class="invis">

        <div class="row">
            <div class="col-md-6 col-sm-12">
                <label class="control-label">Téléphone</label>
                <input type="text" name="telephone" class="form-control" placeholder="">
            </div>
            <div class="col-md-6 col-sm-12">
                <label class="control-label">Fax</label>
                <input type="text" name="fax" class="form-control" placeholder="">
            </div>
        </div><!-- end row -->

        <hr class="invis">

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <label class="control-label">Votre entreprise est présent sur les média sociaux</label>
                <textarea name="social" class="form-control" placeholder=""></textarea>
            </div>
        </div><!-- end row -->

        <hr class="invis">

        <div class="row">
            <div class="col-md-6 col-sm-12">
                <label class="control-label">Site internet</label>
                <input type="text" class="form-control" placeholder="http://psdconverthtml.com">
            </div>
            <div class="col-md-6 col-sm-12">

            </div>
        </div><!-- end row -->

        <hr class="invis">

        <button class="btn btn-primary">Update Profile</button>
    </form>

@endsection