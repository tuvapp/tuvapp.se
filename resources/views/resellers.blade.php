@extends('master')

<div data-react-class="GlobalNavUserSection" data-react-props="{}"></div>



<div class='yield'>

<div id='browse-mode'>
<div class='welcome-visitor-message animated' data-message-cookie='seen_new_visitor_intro'>
<div class='welcome-header-box'>
<div class='welcome-header-layout wrapper'>
<h1>Tuva, The smart and connected communities of the future.</h1>
<div class='close-button-base close-button-thin close-button-welcome-box js-close-welcome-message'></div>
</div>
</div>
<div class='wrapper'>
<div class='link-container visitor-welcome'>
<a class="link-card" href=""><span>Skapa</span> nätverk
</a><a class="link-card" href="https://ifttt.com/recipes"><span>Använd</span> smarta tjänster
</a><a class="link-card"href=""><span>Handla</span> enheter
</a></div>
</div>
</div>

@section('content')


<div class="section">
           <div class="container">
               <h2 class="section-title">Latest Offers</h2>
               <div class="row">
                    <div class="col-md-4">
                        <div class="card card-product card-plain">
                            <div class="image">
                                <a href="#">
                                    <img src="img/product.jpg" alt="..."/>
                                </a>
                            </div>
                            <div class="content">
                                <a href="#">
                                    <h4 class="title">Gucci</h4>
                                </a>
                                <p class="description">
                                   Beautifully tailored from rich burgundy velvet, this impeccable piece has lustrous black satin lining and smart satin-covered buttons.
                                </p>
                                <div class="footer">
                                    <span class="price price-old"> &euro;1,930</span>
                                    <span class="price price-new">&euro;1,330</span>
                                    <button class="btn btn-danger btn-simple pull-right" rel="tooltip" title="Remove from wishlist" data-placement="left">
                                        <i class="fa fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div> <!-- end card -->
                     </div>
                      <div class="col-md-4">
                        <div class="card card-product card-plain">
                            <div class="image">
                                <a href="#">
                                    <img src="img/product.jpg" alt="..."/>
                                </a>
                            </div>
                            <div class="content">
                                <a href="#">
                                    <h4 class="title">Canali</h4>
                                </a>
                                <p class="description">
                                   The structured shoulders and sleek detailing ensure a sharp silhouette. Team it with a silk pocket square and leather loafers.
                                </p>
                                <div class="footer">
                                     <span class="price price-old"> &euro;1,430</span>
                                    <span class="price price-new">&euro;1,030</span>

                                    <button class="btn btn-danger btn-simple btn-hover pull-right">
                                        <i class="fa fa-heart-o"></i> Wishlist
                                    </button>
                                </div>
                            </div>
                        </div> <!-- end card -->
                     </div>
                      <div class="col-md-4">
                        <div class="card card-product card-plain">
                            <div class="image">
                                <a href="#">
                                    <img src="img/product.jpg" alt="..."/>
                                </a>
                            </div>
                            <div class="content">
                                <a href="#">
                                    <h4 class="title">Canali</h4>
                                </a>
                                <p class="description">
                                   The smooth woven-wool is water resistant to ensure you stay pristine after a long-haul flight. Cut in a trim yet comfortable regular fit.
                                </p>
                                <div class="footer">
                                    <span class="price price-old"> &euro;1,299</span>
                                    <span class="price price-new"> &euro;760</span>
                                    <button class="btn btn-danger btn-simple btn-hover pull-right">
                                        <i class="fa fa-heart-o"></i> Wishlist
                                    </button>
                                </div>
                            </div>
                        </div> <!-- end card -->
                     </div>
               </div>
           </div>
    </div><!-- section -->
    <div class="section">
               <div class="container">
                   <h2 class="section-title">Latest Offers</h2>
                   <div class="row">
                        <div class="col-md-4">
                            <div class="card card-product card-plain">
                                <div class="image">
                                    <a href="#">
                                        <img src="img/product.jpg" alt="..."/>
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="#">
                                        <h4 class="title">Gucci</h4>
                                    </a>
                                    <p class="description">
                                       Beautifully tailored from rich burgundy velvet, this impeccable piece has lustrous black satin lining and smart satin-covered buttons.
                                    </p>
                                    <div class="footer">
                                        <span class="price price-old"> &euro;1,930</span>
                                        <span class="price price-new">&euro;1,330</span>
                                        <button class="btn btn-danger btn-simple pull-right" rel="tooltip" title="Remove from wishlist" data-placement="left">
                                            <i class="fa fa-heart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div> <!-- end card -->
                         </div>
                          <div class="col-md-4">
                            <div class="card card-product card-plain">
                                <div class="image">
                                    <a href="#">
                                        <img src="img/product.jpg" alt="..."/>
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="#">
                                        <h4 class="title">Canali</h4>
                                    </a>
                                    <p class="description">
                                       The structured shoulders and sleek detailing ensure a sharp silhouette. Team it with a silk pocket square and leather loafers.
                                    </p>
                                    <div class="footer">
                                         <span class="price price-old"> &euro;1,430</span>
                                        <span class="price price-new">&euro;1,030</span>

                                        <button class="btn btn-danger btn-simple btn-hover pull-right">
                                            <i class="fa fa-heart-o"></i> Wishlist
                                        </button>
                                    </div>
                                </div>
                            </div> <!-- end card -->
                         </div>
                          <div class="col-md-4">
                            <div class="card card-product card-plain">
                                <div class="image">
                                    <a href="#">
                                        <img src="img/product.jpg" alt="..."/>
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="#">
                                        <h4 class="title">Canali</h4>
                                    </a>
                                    <p class="description">
                                       The smooth woven-wool is water resistant to ensure you stay pristine after a long-haul flight. Cut in a trim yet comfortable regular fit.
                                    </p>
                                    <div class="footer">
                                        <span class="price price-old"> &euro;1,299</span>
                                        <span class="price price-new"> &euro;760</span>
                                        <button class="btn btn-danger btn-simple btn-hover pull-right">
                                            <i class="fa fa-heart-o"></i> Wishlist
                                        </button>
                                    </div>
                                </div>
                            </div> <!-- end card -->
                         </div>
                   </div>
               </div>
        </div><!-- section -->

@endsection
