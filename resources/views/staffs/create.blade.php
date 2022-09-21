@extends('layouts.app')
<<<<<<< HEAD
=======
@section('content')

@section('styles')

@endsection
>>>>>>> 9cb96013d8302aa6a1cbb2d43b3e10eb3869eac7

@section('content-header')
     <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-md-6">
          <h1 class="text-black">Nouveau staff</h1>
          </div>
        </div>
      </div> 
@endsection

@section('content')
    <div class="container-fluid">
    <form action="{{ route('staffs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="box-body no-pad">
        <div class="col-md-12">
        <div class="card card-info card-purple card-outline">
        <div class="row padd">

        <!-- Left side elements -->
            <div class="col-md-12">
            <h3 class="box-title"> 
                <i class="fa fa-info" aria-hidden="true">              
                </i>&nbsp;Informations Personnelles
            </h3>         
            <div class="col-md-12 line_box">
                        <!-- PROFILE PICTURE -->
                <div class="row" style="margin-left: 35%;">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="picture-container">
                    <div class="picture">
                        <img src="../../img/user.png" class="picture-src" id="wizardPicturePreview" title=""/>
                        <input type="file" id="wizard-picture" name="avatar" class="form-control">
                    </div>
                    <h6>Photo</h6>
                    </div>
                </div>
            </div>
            <!--/ PROFILE PICTURE --> 
                    <!-- Put inputs here -->
            <div class="row">
            <div class="form-group col-md-6">
                <label for="surname">Nom(s)</label>
                <span class="red">*</span>
                <input type="text" class="form-control @error('staff_name') is-invalid @enderror" name="staff_name"  value="{{ old('staff_name') }}">
            </div>
            <div class="form-group col-md-6">
                <label for="Name">Prénom(s)</label>
                <span class="red">*</span>
                <input type="text" class="form-control @error('staff_surname') is-invalid @enderror" name="staff_surname"  value="{{ old('staff_surname') }}">
            </div>
            </div>
            <div class="row">
            <div class="form-group col-md-5">
                <label for="dob">Date de Naissance</label>
                <span class="red">*</span>
                <input type="date" class="form-control @error('staff_dob') is-invalid @enderror" name="staff_dob" value="{{ old('staff_dob') }}">
            </div>
            <div class="form-group col-md-3">
                <label for="staff_sexe">Sexe</label>
                <span class="red">*</span>
                <select name="staff_sexe" class="form-control @error('staff_sexe') is-invalid @enderror">
                <option hidden="" value="">Sexe</option>
                <option value="Masculin">Masculin</option>
                <option value="Féminin">Féminin</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="Name">Pays</label>
                <span class="red">*</span>
            <select name="staff_country" class="form-control @error('staff_country') is-invalid @enderror">
                <option value="" hidden=""hidden>Choisir un pays</option>
                <option value="Afghanistan">Afghanistan </option>
                    <option value="Afrique Centrale">Afrique Centrale </option>
                    <option value="Afrique du Sud">Afrique du Sud </option>
                    <option value="Albanie">Albanie </option>
                    <option value="Algerie">Algerie </option>
                    <option value="Allemagne">Allemagne </option>
                    <option value="Andorre">Andorre </option>
                    <option value="Angola">Angola </option>
                    <option value="Anguilla">Anguilla </option>
                    <option value="Arabie Saoudite">Arabie Saoudite </option>
                    <option value="Argentine">Argentine </option>
                    <option value="Armenie">Armenie </option>
                    <option value="Australie">Australie </option>
                    <option value="Autriche">Autriche </option>
                    <option value="Azerbaidjan">Azerbaidjan </option>

                    <option value="Bahamas">Bahamas </option>
                    <option value="Bangladesh">Bangladesh </option>
                    <option value="Barbade">Barbade </option>
                    <option value="Bahrein">Bahrein </option>
                    <option value="Belgique">Belgique </option>
                    <option value="Belize">Belize </option>
                    <option value="Benin">Benin </option>
                    <option value="Bermudes">Bermudes </option>
                    <option value="Bielorussie">Bielorussie </option>
                    <option value="Bolivie">Bolivie </option>
                    <option value="Botswana">Botswana </option>
                    <option value="Bhoutan">Bhoutan </option>
                    <option value="Boznie Herzegovine">Boznie Herzegovine </option>
                    <option value="Bresil">Bresil </option>
                    <option value="Brunei">Brunei </option>
                    <option value="Bulgarie">Bulgarie </option>
                    <option value="Burkina Faso">Burkina Faso </option>
                    <option value="Burundi">Burundi </option>

                    <option value="Caiman">Caiman </option>
                    <option value="Cambodge">Cambodge </option>
                    <option value="Cameroun">Cameroun </option>
                    <option value="Canada">Canada </option>
                    <option value="Canaries">Canaries </option>
                    <option value="Cap Vert">Cap Vert </option>
                    <option value="Chili">Chili </option>
                    <option value="Chine">Chine </option>
                    <option value="Chypre">Chypre </option>
                    <option value="Colombie">Colombie </option>
                    <option value="Comores">Colombie </option>
                    <option value="Congo">Congo </option>
                    <option value="Congo Democratique">Congo Democratique </option>
                    <option value="Cook">Cook </option>
                    <option value="Coree du Nord">Coree du Nord </option>
                    <option value="Coree du Sud">Coree du Sud </option>
                    <option value="Costa Rica">Costa_Rica </option>
                    <option value="Côte d Ivoire">Côte d Ivoire </option>
                    <option value="Croatie">Croatie </option>
                    <option value="Cuba">Cuba </option>

                    <option value="Danemark">Danemark </option>
                    <option value="Djibouti">Djibouti </option>
                    <option value="Dominique">Dominique </option>

                    <option value="Egypte">Egypte </option>
                    <option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
                    <option value="Equateur">Equateur </option>
                    <option value="Erythree">Erythree </option>
                    <option value="Espagne">Espagne </option>
                    <option value="Estonie">Estonie </option>
                    <option value="Etats_Unis">Etats_Unis </option>
                    <option value="Ethiopie">Ethiopie </option>

                    <option value="Falkland">Falkland </option>
                    <option value="Feroe">Feroe </option>
                    <option value="Fidji">Fidji </option>
                    <option value="Finlande">Finlande </option>
                    <option value="France">France </option>

                    <option value="Gabon">Gabon </option>
                    <option value="Gambie">Gambie </option>
                    <option value="Georgie">Georgie </option>
                    <option value="Ghana">Ghana </option>
                    <option value="Gibraltar">Gibraltar </option>
                    <option value="Grece">Grece </option>
                    <option value="Grenade">Grenade </option>
                    <option value="Groenland">Groenland </option>
                    <option value="Guadeloupe">Guadeloupe </option>
                    <option value="Guam">Guam </option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guernesey">Guernesey </option>
                    <option value="Guinee">Guinee </option>
                    <option value="Guinee_Bissau">Guinee_Bissau </option>
                    <option value="Guinee equatoriale">Guinee_Equatoriale </option>
                    <option value="Guyana">Guyana </option>
                    <option value="Guyane_Francaise ">Guyane_Francaise </option>

                    <option value="Haiti">Haiti </option>
                    <option value="Hawaii">Hawaii </option>
                    <option value="Honduras">Honduras </option>
                    <option value="Hong_Kong">Hong_Kong </option>
                    <option value="Hongrie">Hongrie </option>

                    <option value="Inde">Inde </option>
                    <option value="Indonesie">Indonesie </option>
                    <option value="Iran">Iran </option>
                    <option value="Iraq">Iraq </option>
                    <option value="Irlande">Irlande </option>
                    <option value="Islande">Islande </option>
                    <option value="Israel">Israel </option>
                    <option value="Italie">italie </option>

                    <option value="Jamaique">Jamaique </option>
                    <option value="Jan Mayen">Jan Mayen </option>
                    <option value="Japon">Japon </option>
                    <option value="Jersey">Jersey </option>
                    <option value="Jordanie">Jordanie </option>

                    <option value="Kazakhstan">Kazakhstan </option>
                    <option value="Kenya">Kenya </option>
                    <option value="Kirghizstan">Kirghizistan </option>
                    <option value="Kiribati">Kiribati </option>
                    <option value="Koweit">Koweit </option>

                    <option value="Laos">Laos </option>
                    <option value="Lesotho">Lesotho </option>
                    <option value="Lettonie">Lettonie </option>
                    <option value="Liban">Liban </option>
                    <option value="Liberia">Liberia </option>
                    <option value="Liechtenstein">Liechtenstein </option>
                    <option value="Lituanie">Lituanie </option>
                    <option value="Luxembourg">Luxembourg </option>
                    <option value="Lybie">Lybie </option>

                    <option value="Macao">Macao </option>
                    <option value="Macedoine">Macedoine </option>
                    <option value="Madagascar">Madagascar </option>
                    <option value="Madère">Madère </option>
                    <option value="Malaisie">Malaisie </option>
                    <option value="Malawi">Malawi </option>
                    <option value="Maldives">Maldives </option>
                    <option value="Mali">Mali </option>
                    <option value="Malte">Malte </option>
                    <option value="Man">Man </option>
                    <option value="Mariannes du Nord">Mariannes du Nord </option>
                    <option value="Maroc">Maroc </option>
                    <option value="Marshall">Marshall </option>
                    <option value="Martinique">Martinique </option>
                    <option value="Maurice">Maurice </option>
                    <option value="Mauritanie">Mauritanie </option>
                    <option value="Mayotte">Mayotte </option>
                    <option value="Mexique">Mexique </option>
                    <option value="Micronesie">Micronesie </option>
                    <option value="Midway">Midway </option>
                    <option value="Moldavie">Moldavie </option>
                    <option value="Monaco">Monaco </option>
                    <option value="Mongolie">Mongolie </option>
                    <option value="Montserrat">Montserrat </option>
                    <option value="Mozambique">Mozambique </option>

                    <option value="Namibie">Namibie </option>
                    <option value="Nauru">Nauru </option>
                    <option value="Nepal">Nepal </option>
                    <option value="Nicaragua">Nicaragua </option>
                    <option value="Niger">Niger </option>
                    <option value="Nigeria">Nigeria </option>
                    <option value="Niue">Niue </option>
                    <option value="Norfolk">Norfolk </option>
                    <option value="Norvege">Norvege </option>
                    <option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
                    <option value="Nouvelle_Zelande">Nouvelle_Zelande </option>

                    <option value="Oman">Oman </option>
                    <option value="Ouganda">Ouganda </option>
                    <option value="Ouzbekistan">Ouzbekistan </option>

                    <option value="Pakistan">Pakistan </option>
                    <option value="Palau">Palau </option>
                    <option value="Palestine">Palestine </option>
                    <option value="Panama">Panama </option>
                    <option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
                    <option value="Paraguay">Paraguay </option>
                    <option value="Pays_Bas">Pays_Bas </option>
                    <option value="Perou">Perou </option>
                    <option value="Philippines">Philippines </option>
                    <option value="Pologne">Pologne </option>
                    <option value="Polynesie">Polynesie </option>
                    <option value="Porto_Rico">Porto_Rico </option>
                    <option value="Portugal">Portugal </option>

                    <option value="Qatar">Qatar </option>

                    <option value="Republique_Dominicaine">Republique_Dominicaine </option>
                    <option value="Republique_Tcheque">Republique_Tcheque </option>
                    <option value="Reunion">Reunion </option>
                    <option value="Roumanie">Roumanie </option>
                    <option value="Royaume_Uni">Royaume_Uni </option>
                    <option value="Russie">Russie </option>
                    <option value="Rwanda">Rwanda </option>

                    <option value="Sahara Occidental">Sahara Occidental </option>
                    <option value="Sainte_Lucie">Sainte_Lucie </option>
                    <option value="Saint_Marin">Saint_Marin </option>
                    <option value="Salomon">Salomon </option>
                    <option value="Salvador">Salvador </option>
                    <option value="Samoa_Occidentales">Samoa_Occidentales</option>
                    <option value="Samoa_Americaine">Samoa_Americaine </option>
                    <option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
                    <option value="Senegal">Senegal </option>
                    <option value="Seychelles">Seychelles </option>
                    <option value="Sierra Leone">Sierra Leone </option>
                    <option value="Singapour">Singapour </option>
                    <option value="Slovaquie">Slovaquie </option>
                    <option value="Slovenie">Slovenie</option>
                    <option value="Somalie">Somalie </option>
                    <option value="Soudan">Soudan </option>
                    <option value="Sri_Lanka">Sri_Lanka </option>
                    <option value="Suede">Suede </option>
                    <option value="Suisse">Suisse </option>
                    <option value="Surinam">Surinam </option>
                    <option value="Swaziland">Swaziland </option>
                    <option value="Syrie">Syrie </option>

                    <option value="Tadjikistan">Tadjikistan </option>
                    <option value="Taiwan">Taiwan </option>
                    <option value="Tonga">Tonga </option>
                    <option value="Tanzanie">Tanzanie </option>
                    <option value="Tchad">Tchad </option>
                    <option value="Thailande">Thailande </option>
                    <option value="Tibet">Tibet </option>
                    <option value="Timor_Oriental">Timor_Oriental </option>
                    <option value="Togo">Togo </option>
                    <option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
                    <option value="Tristan da cunha">Tristan de cuncha </option>
                    <option value="Tunisie">Tunisie </option>
                    <option value="Turkmenistan">Turmenistan </option>
                    <option value="Turquie">Turquie </option>

                    <option value="Ukraine">Ukraine </option>
                    <option value="Uruguay">Uruguay </option>

                    <option value="Vanuatu">Vanuatu </option>
                    <option value="Vatican">Vatican </option>
                    <option value="Venezuela">Venezuela </option>
                    <option value="Vierges_Americaines">Vierges_Americaines </option>
                    <option value="Vierges_Britanniques">Vierges_Britanniques </option>
                    <option value="Vietnam">Vietnam </option>

                    <option value="Wake">Wake </option>
                    <option value="Wallis et Futuma">Wallis et Futuma </option>

                    <option value="Yemen">Yemen </option>
                    <option value="Yougoslavie">Yougoslavie </option>

                    <option value="Zambie">Zambie </option>
                    <option value="Zimbabwe">Zimbabwe </option>
                </select>
            </div>
            </div>

            <div class="row">
                <div class="form-group col-md-9">
                    <label for="Name">Lieu de Naissance</label>
                    <span class="red">*</span>
                    <input type="text" class="form-control @error('staff_pob') is-invalid @enderror" name="staff_pob"  value="{{ old('staff_pob') }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="Name">Matricule (code)</label>
                    <span class="red">*</span>
                    <input type="text" class="form-control" name="staff_code"  value="{{ $code_gen }}" readonly>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="Name">Adresse</label>
                    <span class="red">*</span>
                    <input type="text" class="form-control @error('staff_adress') is-invalid @enderror" name="staff_adress" value="{{ old('staff_adress') }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="Name">Code Postal</label>
                    <span class="red">*</span>
                    <input type="number" class="form-control @error('staff_postal') is-invalid @enderror" name="staff_postal" value="{{ old('staff_postal') }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="Name">Ville</label>
                    <span class="red">*</span>
                    <input type="text" class="form-control @error('staff_ville') is-invalid @enderror" name="staff_ville" value="{{ old('staff_ville') }}">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="Name">Email</label>
                    <span class="red">*</span>
                    <input type="email" class="form-control  @error('staff_email') is-invalid @enderror" name="staff_email"  value="{{ old('staff_email') }}">
                    @error('staff_email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                    <div class="form-group col-md-6">
                    <label for="Name">Téléphone</label>
                    <span class="red">*</span>
                    <input type="number" class="form-control @error('staff_phone') is-invalid @enderror" name="staff_phone"  value="{{ old('staff_phone') }}">
                    </div>
                </div>  
            </div>
                     
        </div><!-- end Left side elements -->

    
    </div><!-- end right side elements -->
    </div>
    <div class="box-footer text-right">
        <button type="submit" class="btn btn-success shadow"><i class="fa-solid fa-file-arrow-down"></i> Enregistrer</button>&nbsp;&nbsp;
        <a href="{{route('staffs.index')}}" class="btn btn-primary shadow"><i class="fa-solid fa-arrow-left"></i> Retour</a>
    </div>
    </div>
    </div>
    </form>     
    </div>

@endsection
