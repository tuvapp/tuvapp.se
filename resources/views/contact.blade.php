@extends('master')

@section('content')

	<section>
        <div id="map" class="with-border"></div>
    </section>

    <div id="content">
        <div class="container" id="contact">
        	@if (session('status'))
        		{!! session('status') !!}
        	@endif
            <section>
                <div class="row">
                    <div class="col-md-8">

                        <div class="heading">
                            <h2>Vi finns här för idéer, tankar och funderingar</h2>
                        </div>

                        <p>Vänligen kontakta oss när och hur du vill via kontaktformen så återkommer vi så snart vi bara kan.</p>

                      <!-  <div class="heading">
                            <h3>Kontaktformulär</h3>
                        </div>

                        <form method="post">
                        	{!! csrf_field() !!}
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group {{ $errors->has('firstname') ? 'has-error' : '' }}">
                                        <label for="firstname">Förnamn *</label>
                                        <input type="text" class="form-control" name="firstname" value="{{ old('firstname') }}">
                                        @if ($errors->has('firstname'))
			                                <span class="help-block">
			                                    <strong>{{ $errors->first('firstname') }}</strong>
			                                </span>
			                            @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group {{ $errors->has('lastname') ? 'has-error' : '' }}">
                                        <label for="lastname">Efternamn *</label>
                                        <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}">
                                        @if ($errors->has('lastname'))
			                                <span class="help-block">
			                                    <strong>{{ $errors->first('lastname') }}</strong>
			                                </span>
			                            @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                        <label for="email">Email *</label>
                                        <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
			                                <span class="help-block">
			                                    <strong>{{ $errors->first('email') }}</strong>
			                                </span>
			                            @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group {{ $errors->has('subject') ? 'has-error' : '' }}">
                                        <label for="subject">Ämne *</label>
                                        <input type="text" class="form-control" name="subject" value="{{ old('subject') }}">
                                        @if ($errors->has('subject'))
			                                <span class="help-block">
			                                    <strong>{{ $errors->first('subject') }}</strong>
			                                </span>
			                            @endif
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                                        <label for="message">Meddelande *</label>
                                        <textarea name="message" class="form-control">{{ old('message') }}</textarea>
                                        @if ($errors->has('message'))
			                                <span class="help-block">
			                                    <strong>{{ $errors->first('message') }}</strong>
			                                </span>
			                            @endif
                                    </div>
                                </div>

                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-template-main"><i class="fa fa-envelope-o"></i> Skicka meddelande</button>

                                </div>
                            </div>
                            <!-- /.row -->
                        </form>
                    </div>

                    <div class="col-md-4">


                        <h3 class="text-uppercase">Adress</h3>

                        <p>Gjuterigatan 9
                            <br>553 18 Jönköping
                            <br>
                            <strong>Sweden</strong>
                        </p>

                        <h3 class="text-uppercase">Telefon</h3>

                        <p class="text-muted">Om du önskar tala med oss direkt på telefon går det lika bra. Vänligen ring numret nedan.</p>
                        <p><strong><a href="tel:+46767055370">+46 (0) 767 - 05 53 70</a></strong>
                        </p>



                        <h3 class="text-uppercase">Teknisk support</h3>

                        <p class="text-muted">Har ni en defekt produkt eller fundering kring funktion? Kontakta oss via följande nedan.</p>
                        <strong><a href="mailto:info@progressivesafety.se">info@progressivesafety.se</a></strong>



                    </div>

                </div>


            </section>

        </div>
        <!-- /#contact.container -->
    </div>
    <!-- /#content -->

@endsection

@section('script')
	<!-- gmaps -->

    <script src="http://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

    <script src="js/gmaps.js"></script>
    <script src="js/gmaps.init.js"></script>

    <!-- gmaps end -->
@endsection
