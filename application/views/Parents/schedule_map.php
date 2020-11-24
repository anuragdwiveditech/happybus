

<div class="page-content">
          <div class="header">
            <h2>Schedule  <strong>Map</strong></h2>
            <div class="breadcrumb-wrapper">
              <ol class="breadcrumb">
                <li><a href="#">Schedule Map</a>
                </li>
                <li><a href="forms.html">Schedule Map</a>
                </li>
                <li class="active">Schedule Ride</li>
              </ol>
            </div>
          </div>
          <div class="col-md-6 col-md-offset-3">
        <?php echo $this->session->flashdata('verify_msg'); ?>
    </div>
          <div class="row">
            <div class="col-lg-12 portlets ui-sortable">
              <div class="panel">
                <div class="panel-header panel-controls ui-sortable-handle">
                  <h3><i class="fa fa-bus" ></i> Schedule  <strong>Ride</strong></h3>
                <div class="control-btn"><a href="#" class="panel-reload hidden"><i class="icon-reload"></i></a><a class="hidden" id="dropdownMenu1" data-toggle="dropdown"><i class="icon-settings"></i></a><ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu1"><li><a href="#">Action</a></li><li><a href="#">Another action</a></li><li><a href="#">Something else here</a></li></ul><a href="#" class="panel-popout hidden tt" title="Pop Out/In"><i class="icons-office-58"></i></a><a href="#" class="panel-maximize hidden"><i class="icon-size-fullscreen"></i></a><a href="#" class="panel-toggle"><i class="fa fa-angle-down"></i></a><a href="#" class="panel-close"><i class="icon-trash"></i></a></div></div>
                <div class="panel-content">
                   <!--Google map-->
<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
  <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
    style="border:0" allowfullscreen></iframe>
</div>



        <div class="page-content page-pricing-table open">
         
          <div class="row">
            
                <div class="row plans pricing-table plan-separated num-plan-9 m-b-80">
                  <div class="col-sm-12">
                    <div class="plans clearfix">
                      <div class="plan">
                     
                        <div class="plan-header bg-primary">
                          <div class="title"><span>Basic</span></div>
                          <div class="price"><span class="amount">9</span><span>$/month</span></div>
                          <div class="plan-top-btn text-center"><span class="offer">free month</span></div>
                        </div>
                        <div class="description">
                          <div class="p-item">
                            <div class="sort-item" title="Move this item"><i class="fa fa-bars"></i></div>
                            <div class="remove-item" title="Remove this item"><i class="icon-trash"></i></div>
                            <p class="plan-item">500 emails</p>
                          </div>
                          <div class="p-item">
                            <div class="sort-item" title="Move this item"><i class="fa fa-bars"></i></div>
                            <div class="remove-item" title="Remove this item"><i class="icon-trash"></i></div>
                            <p class="plan-item"><b>unlimited</b> data</p>
                          </div>
                          <div class="p-item">
                            <div class="sort-item" title="Move this item"><i class="fa fa-bars"></i></div>
                            <div class="remove-item" title="Remove this item"><i class="icon-trash"></i></div>
                            <p class="plan-item"><b> 1</b> users</p>
                          </div>
                          <div class="p-item">
                            <div class="sort-item" title="Move this item"><i class="fa fa-bars"></i></div>
                            <div class="remove-item" title="Remove this item"><i class="icon-trash"></i></div>
                            <p class="plan-item">first 15 day free</p>
                          </div>
                          <div class="text-center plan-bottom-btn p-b-10">
                            <a class="btn btn-primary" href="#">Change to this Plan</a>
                          </div>
                        </div>
                        <div class="remove-plan" data-rel="tooltip" data-placement="bottom" data-original-title="Remove this plan"><i class="icon-trash"></i></div>
                      </div>
                    
                    
                    </div>
                  </div>
                </div>
              </div>
              <!-- END PRICING TABLE -->
            </div>
          </div>
          <!-- MODAL TOO MANY PLANS -->
          <div class="modal fade" id="max-plans" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icons-office-52"></i></button>
                  <h4 class="modal-title"><strong>Max</strong> Plans Reach</h4>
                </div>
                <div class="modal-body">
                  <p>You can't add more than 5 plans.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default btn-embossed" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary btn-embossed" data-dismiss="modal">OK</button>
                </div>
              </div>
            </div>
          </div>
          <!-- END MODAL TOO MANY PLANS -->
          <!-- MODAL EXPORT HTML -->
          <div class="modal fade" id="export-html" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icons-office-52"></i></button>
                  <h4 class="modal-title"><strong>Export</strong> Pricing Table</h4>
                </div>
                <div class="modal-body">
                  <div  class="form-control withScroll" data-height="300">
                    <div contenteditable="true" id="export-textarea"></div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default btn-embossed" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary btn-embossed" data-dismiss="modal">OK</button>
                </div>
              </div>
            </div>
          </div>
          <!-- END MODAL EXPORT HTML -->
          <!-- MODALS ICONS -->
          <div class="modal fade" id="modal-icons" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="width:500px">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="icons-office-52"></i></span></button>
                  <h4 class="modal-title" id="myModalLabel">Icons</h4>
                </div>
                <div class="modal-body withScroll" data-height="220">
                  <div class="row">
                    <div class="col-md-12">
                      <h3 class="m-t-40"><strong>Simple Line Icons</strong></h3>
                    </div>
                    <div class="col-sm-2"><i class="icon-user"></i></div>
                    <div class="col-sm-2"><i class="icon-user-female"></i></div>
                    <div class="col-sm-2"><i class="icon-users"></i></div>
                    <div class="col-sm-2"><i class="icon-user-follow"></i></div>
                    <div class="col-sm-2"><i class="icon-user-following"></i></div>
                    <div class="col-sm-2"><i class="icon-user-unfollow"></i></div>
                    <div class="col-sm-2"><i class="icon-trophy"></i></div>
                    <div class="col-sm-2"><i class="icon-speedometer"></i></div>
                    <div class="col-sm-2"><i class="icon-social-youtube"></i></div>
                    <div class="col-sm-2"><i class="icon-social-twitter"></i></div>
                    <div class="col-sm-2"><i class="icon-social-tumblr"></i></div>
                    <div class="col-sm-2"><i class="icon-social-facebook"></i></div>
                    <div class="col-sm-2"><i class="icon-social-dropbox"></i></div>
                    <div class="col-sm-2"><i class="icon-social-dribbble"></i></div>
                    <div class="col-sm-2"><i class="icon-shield"></i></div>
                    <div class="col-sm-2"><i class="icon-screen-tablet"></i></div>
                    <div class="col-sm-2"><i class="icon-screen-smartphone"></i></div>
                    <div class="col-sm-2"><i class="icon-screen-desktop"></i></div>
                    <div class="col-sm-2"><i class="icon-plane"></i></div>
                    <div class="col-sm-2"><i class="icon-notebook"></i></div>
                    <div class="col-sm-2"><i class="icon-moustache"></i></div>
                    <div class="col-sm-2"><i class="icon-mouse"></i></div>
                    <div class="col-sm-2"><i class="icon-magnet"></i></div>
                    <div class="col-sm-2"><i class="icon-magic-wand"></i></div>
                    <div class="col-sm-2"><i class="icon-hourglass"></i></div>
                    <div class="col-sm-2"><i class="icon-graduation"></i></div>
                    <div class="col-sm-2"><i class="icon-ghost"></i></div>
                    <div class="col-sm-2"><i class="icon-game-controller"></i></div>
                    <div class="col-sm-2"><i class="icon-fire"></i></div>
                    <div class="col-sm-2"><i class="icon-eyeglasses"></i></div>
                    <div class="col-sm-2"><i class="icon-envelope-open"></i></div>
                    <div class="col-sm-2"><i class="icon-envelope-letter"></i></div>
                    <div class="col-sm-2"><i class="icon-energy"></i></div>
                    <div class="col-sm-2"><i class="icon-emoticon-smile"></i></div>
                    <div class="col-sm-2"><i class="icon-disc"></i></div>
                    <div class="col-sm-2"><i class="icon-cursor-move"></i></div>
                    <div class="col-sm-2"><i class="icon-crop"></i></div>
                    <div class="col-sm-2"><i class="icon-credit-card"></i></div>
                    <div class="col-sm-2"><i class="icon-chemistry"></i></div>
                    <div class="col-sm-2"><i class="icon-bell"></i></div>
                    <div class="col-sm-2"><i class="icon-badge"></i></div>
                    <div class="col-sm-2"><i class="icon-anchor"></i></div>
                    <div class="col-sm-2"><i class="icon-action-redo"></i></div>
                    <div class="col-sm-2"><i class="icon-action-undo"></i></div>
                    <div class="col-sm-2"><i class="icon-bag"></i></div>
                    <div class="col-sm-2"><i class="icon-basket"></i></div>
                    <div class="col-sm-2"><i class="icon-basket-loaded"></i></div>
                    <div class="col-sm-2"><i class="icon-book-open"></i></div>
                    <div class="col-sm-2"><i class="icon-briefcase"></i></div>
                    <div class="col-sm-2"><i class="icon-bubbles"></i></div>
                    <div class="col-sm-2"><i class="icon-calculator"></i></div>
                    <div class="col-sm-2"><i class="icon-call-end"></i></div>
                    <div class="col-sm-2"><i class="icon-call-in"></i></div>
                    <div class="col-sm-2"><i class="icon-call-out"></i></div>
                    <div class="col-sm-2"><i class="icon-compass"></i></div>
                    <div class="col-sm-2"><i class="icon-cup"></i></div>
                    <div class="col-sm-2"><i class="icon-diamond"></i></div>
                    <div class="col-sm-2"><i class="icon-direction"></i></div>
                    <div class="col-sm-2"><i class="icon-directions"></i></div>
                    <div class="col-sm-2"><i class="icon-docs"></i></div>
                    <div class="col-sm-2"><i class="icon-drawer"></i></div>
                    <div class="col-sm-2"><i class="icon-drop"></i></div>
                    <div class="col-sm-2"><i class="icon-earphones"></i></div>
                    <div class="col-sm-2"><i class="icon-earphones-alt"></i></div>
                    <div class="col-sm-2"><i class="icon-feed"></i></div>
                    <div class="col-sm-2"><i class="icon-film"></i></div>
                    <div class="col-sm-2"><i class="icon-folder-alt"></i></div>
                    <div class="col-sm-2"><i class="icon-frame"></i></div>
                    <div class="col-sm-2"><i class="icon-globe"></i></div>
                    <div class="col-sm-2"><i class="icon-globe-alt"></i></div>
                    <div class="col-sm-2"><i class="icon-handbag"></i></div>
                    <div class="col-sm-2"><i class="icon-layers"></i></div>
                    <div class="col-sm-2"><i class="icon-map"></i></div>
                    <div class="col-sm-2"><i class="icon-picture"></i></div>
                    <div class="col-sm-2"><i class="icon-pin"></i></div>
                    <div class="col-sm-2"><i class="icon-playlist"></i></div>
                    <div class="col-sm-2"><i class="icon-present"></i></div>
                    <div class="col-sm-2"><i class="icon-printer"></i></div>
                    <div class="col-sm-2"><i class="icon-puzzle"></i></div>
                    <div class="col-sm-2"><i class="icon-speech"></i></div>
                    <div class="col-sm-2"><i class="icon-vector"></i></div>
                    <div class="col-sm-2"><i class="icon-wallet"></i></div>
                    <div class="col-sm-2"><i class="icon-arrow-down"></i></div>
                    <div class="col-sm-2"><i class="icon-arrow-left"></i></div>
                    <div class="col-sm-2"><i class="icon-arrow-right"></i></div>
                    <div class="col-sm-2"><i class="icon-arrow-up"></i></div>
                    <div class="col-sm-2"><i class="icon-bar-chart"></i></div>
                    <div class="col-sm-2"><i class="icon-bulb"></i></div>
                    <div class="col-sm-2"><i class="icon-calendar"></i></div>
                    <div class="col-sm-2"><i class="icon-control-end"></i></div>
                    <div class="col-sm-2"><i class="icon-control-forward"></i></div>
                    <div class="col-sm-2"><i class="icon-control-pause"></i></div>
                    <div class="col-sm-2"><i class="icon-control-play"></i></div>
                    <div class="col-sm-2"><i class="icon-control-rewind"></i></div>
                    <div class="col-sm-2"><i class="icon-control-start"></i></div>
                    <div class="col-sm-2"><i class="icon-cursor"></i></div>
                    <div class="col-sm-2"><i class="icon-dislike"></i></div>
                    <div class="col-sm-2"><i class="icon-equalizer"></i></div>
                    <div class="col-sm-2"><i class="icon-graph"></i></div>
                    <div class="col-sm-2"><i class="icon-grid"></i></div>
                    <div class="col-sm-2"><i class="icon-home"></i></div>
                    <div class="col-sm-2"><i class="icon-like"></i></div>
                    <div class="col-sm-2"><i class="icon-list"></i></div>
                    <div class="col-sm-2"><i class="icon-login"></i></div>
                    <div class="col-sm-2"><i class="icon-logout"></i></div>
                    <div class="col-sm-2"><i class="icon-loop"></i></div>
                    <div class="col-sm-2"><i class="icon-microphone"></i></div>
                    <div class="col-sm-2"><i class="icon-music-tone"></i></div>
                    <div class="col-sm-2"><i class="icon-music-tone-alt"></i></div>
                    <div class="col-sm-2"><i class="icon-note"></i></div>
                    <div class="col-sm-2"><i class="icon-pencil"></i></div>
                    <div class="col-sm-2"><i class="icon-pie-chart"></i></div>
                    <div class="col-sm-2"><i class="icon-question"></i></div>
                    <div class="col-sm-2"><i class="icon-rocket"></i></div>
                    <div class="col-sm-2"><i class="icon-share"></i></div>
                    <div class="col-sm-2"><i class="icon-share-alt"></i></div>
                    <div class="col-sm-2"><i class="icon-shuffle"></i></div>
                    <div class="col-sm-2"><i class="icon-size-actual"></i></div>
                    <div class="col-sm-2"><i class="icon-size-fullscreen"></i></div>
                    <div class="col-sm-2"><i class="icon-support"></i></div>
                    <div class="col-sm-2"><i class="icon-tag"></i></div>
                    <div class="col-sm-2"><i class="icon-trash"></i></div>
                    <div class="col-sm-2"><i class="icon-umbrella"></i></div>
                    <div class="col-sm-2"><i class="icon-wrench"></i></div>
                    <div class="col-sm-2"><i class="icon-ban"></i></div>
                    <div class="col-sm-2"><i class="icon-bubble"></i></div>
                    <div class="col-sm-2"><i class="icon-camcorder"></i></div>
                    <div class="col-sm-2"><i class="icon-camera"></i></div>
                    <div class="col-sm-2"><i class="icon-check"></i></div>
                    <div class="col-sm-2"><i class="icon-clock"></i></div>
                    <div class="col-sm-2"><i class="icon-close"></i></div>
                    <div class="col-sm-2"><i class="icon-cloud-download"></i></div>
                    <div class="col-sm-2"><i class="icon-cloud-upload"></i></div>
                    <div class="col-sm-2"><i class="icon-doc"></i></div>
                    <div class="col-sm-2"><i class="icon-envelope"></i></div>
                    <div class="col-sm-2"><i class="icon-eye"></i></div>
                    <div class="col-sm-2"><i class="icon-flag"></i></div>
                    <div class="col-sm-2"><i class="icon-folder"></i></div>
                    <div class="col-sm-2"><i class="icon-heart"></i></div>
                    <div class="col-sm-2"><i class="icon-info"></i></div>
                    <div class="col-sm-2"><i class="icon-key"></i></div>
                    <div class="col-sm-2"><i class="icon-link"></i></div>
                    <div class="col-sm-2"><i class="icon-lock"></i></div>
                    <div class="col-sm-2"><i class="icon-lock-open"></i></div>
                    <div class="col-sm-2"><i class="icon-magnifier"></i></div>
                    <div class="col-sm-2"><i class="icon-magnifier-add"></i></div>
                    <div class="col-sm-2"><i class="icon-magnifier-remove"></i></div>
                    <div class="col-sm-2"><i class="icon-paper-clip"></i></div>
                    <div class="col-sm-2"><i class="icon-paper-plane"></i></div>
                    <div class="col-sm-2"><i class="icon-plus"></i></div>
                    <div class="col-sm-2"><i class="icon-pointer"></i></div>
                    <div class="col-sm-2"><i class="icon-power"></i></div>
                    <div class="col-sm-2"><i class="icon-refresh"></i></div>
                    <div class="col-sm-2"><i class="icon-reload"></i></div>
                    <div class="col-sm-2"><i class="icon-settings"></i></div>
                    <div class="col-sm-2"><i class="icon-star"></i></div>
                    <div class="col-sm-2"><i class="icon-symbol-female"></i></div>
                    <div class="col-sm-2"><i class="icon-symbol-male"></i></div>
                    <div class="col-sm-2"><i class="icon-target"></i></div>
                    <div class="col-sm-2"><i class="icon-volume-1"></i></div>
                    <div class="col-sm-2"><i class="icon-volume-2"></i></div>
                    <div class="col-sm-2"><i class="icon-volume-off"></i></div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <h3 class="m-t-0"><strong>Font Awesome</strong></h3>
                    </div>
                    <div class="col-sm-2"><i class="fa fa-adjust"></i></div>
                    <div class="col-sm-2"><i class="fa fa-anchor"></i></div>
                    <div class="col-sm-2"><i class="fa fa-archive"></i></div>
                    <div class="col-sm-2"><i class="fa fa-area-chart"></i></div>
                    <div class="col-sm-2"><i class="fa fa-arrows"></i></div>
                    <div class="col-sm-2"><i class="fa fa-arrows-h"></i></div>
                    <div class="col-sm-2"><i class="fa fa-arrows-v"></i></div>
                    <div class="col-sm-2"><i class="fa fa-asterisk"></i></div>
                    <div class="col-sm-2"><i class="fa fa-at"></i></div>
                    <div class="col-sm-2"><i class="fa fa-automobile"></i></div>
                    <div class="col-sm-2"><i class="fa fa-ban"></i></div>
                    <div class="col-sm-2"><i class="fa fa-bank"></i></div>
                    <div class="col-sm-2"><i class="fa fa-bar-chart"></i></div>
                    <div class="col-sm-2"><i class="fa fa-bar-chart-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-barcode"></i></div>
                    <div class="col-sm-2"><i class="fa fa-bars"></i></div>
                    <div class="col-sm-2"><i class="fa fa-beer"></i></div>
                    <div class="col-sm-2"><i class="fa fa-bell"></i></div>
                    <div class="col-sm-2"><i class="fa fa-bell-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-bell-slash"></i></div>
                    <div class="col-sm-2"><i class="fa fa-bell-slash-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-bicycle"></i></div>
                    <div class="col-sm-2"><i class="fa fa-binoculars"></i></div>
                    <div class="col-sm-2"><i class="fa fa-birthday-cake"></i></div>
                    <div class="col-sm-2"><i class="fa fa-bolt"></i></div>
                    <div class="col-sm-2"><i class="fa fa-bomb"></i></div>
                    <div class="col-sm-2"><i class="fa fa-book"></i></div>
                    <div class="col-sm-2"><i class="fa fa-bookmark"></i></div>
                    <div class="col-sm-2"><i class="fa fa-bookmark-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-briefcase"></i></div>
                    <div class="col-sm-2"><i class="fa fa-bug"></i></div>
                    <div class="col-sm-2"><i class="fa fa-building"></i></div>
                    <div class="col-sm-2"><i class="fa fa-building-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-bullhorn"></i></div>
                    <div class="col-sm-2"><i class="fa fa-bullseye"></i></div>
                    <div class="col-sm-2"><i class="fa fa-cab"></i></div>
                    <div class="col-sm-2"><i class="fa fa-calculator"></i></div>
                    <div class="col-sm-2"><i class="fa fa-calendar"></i></div>
                    <div class="col-sm-2"><i class="fa fa-calendar-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-camera"></i></div>
                    <div class="col-sm-2"><i class="fa fa-camera-retro"></i></div>
                    <div class="col-sm-2"><i class="fa fa-car"></i></div>
                    <div class="col-sm-2"><i class="fa fa-caret-square-o-down"></i></div>
                    <div class="col-sm-2"><i class="fa fa-caret-square-o-left"></i></div>
                    <div class="col-sm-2"><i class="fa fa-caret-square-o-right"></i></div>
                    <div class="col-sm-2"><i class="fa fa-caret-square-o-up"></i></div>
                    <div class="col-sm-2"><i class="fa fa-cc"></i></div>
                    <div class="col-sm-2"><i class="fa fa-certificate"></i></div>
                    <div class="col-sm-2"><i class="fa fa-check"></i></div>
                    <div class="col-sm-2"><i class="fa fa-check-circle"></i></div>
                    <div class="col-sm-2"><i class="fa fa-check-circle-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-check-square"></i></div>
                    <div class="col-sm-2"><i class="fa fa-check-square-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-child"></i></div>
                    <div class="col-sm-2"><i class="fa fa-circle"></i></div>
                    <div class="col-sm-2"><i class="fa fa-circle-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-circle-o-notch"></i></div>
                    <div class="col-sm-2"><i class="fa fa-circle-thin"></i></div>
                    <div class="col-sm-2"><i class="fa fa-clock-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-close"></i></div>
                    <div class="col-sm-2"><i class="fa fa-cloud"></i></div>
                    <div class="col-sm-2"><i class="fa fa-cloud-download"></i></div>
                    <div class="col-sm-2"><i class="fa fa-cloud-upload"></i></div>
                    <div class="col-sm-2"><i class="fa fa-code"></i></div>
                    <div class="col-sm-2"><i class="fa fa-code-fork"></i></div>
                    <div class="col-sm-2"><i class="fa fa-coffee"></i></div>
                    <div class="col-sm-2"><i class="fa fa-cog"></i></div>
                    <div class="col-sm-2"><i class="fa fa-cogs"></i></div>
                    <div class="col-sm-2"><i class="fa fa-comment"></i></div>
                    <div class="col-sm-2"><i class="fa fa-comment-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-comments"></i></div>
                    <div class="col-sm-2"><i class="fa fa-comments-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-compass"></i></div>
                    <div class="col-sm-2"><i class="fa fa-copyright"></i></div>
                    <div class="col-sm-2"><i class="fa fa-credit-card"></i></div>
                    <div class="col-sm-2"><i class="fa fa-crop"></i></div>
                    <div class="col-sm-2"><i class="fa fa-crosshairs"></i></div>
                    <div class="col-sm-2"><i class="fa fa-cube"></i></div>
                    <div class="col-sm-2"><i class="fa fa-cubes"></i></div>
                    <div class="col-sm-2"><i class="fa fa-cutlery"></i></div>
                    <div class="col-sm-2"><i class="fa fa-dashboard"></i></div>
                    <div class="col-sm-2"><i class="fa fa-database"></i></div>
                    <div class="col-sm-2"><i class="fa fa-desktop"></i></div>
                    <div class="col-sm-2"><i class="fa fa-dot-circle-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-download"></i></div>
                    <div class="col-sm-2"><i class="fa fa-edit"></i></div>
                    <div class="col-sm-2"><i class="fa fa-ellipsis-h"></i></div>
                    <div class="col-sm-2"><i class="fa fa-ellipsis-v"></i></div>
                    <div class="col-sm-2"><i class="fa fa-envelope"></i></div>
                    <div class="col-sm-2"><i class="fa fa-envelope-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-envelope-square"></i></div>
                    <div class="col-sm-2"><i class="fa fa-eraser"></i></div>
                    <div class="col-sm-2"><i class="fa fa-exchange"></i></div>
                    <div class="col-sm-2"><i class="fa fa-exclamation"></i></div>
                    <div class="col-sm-2"><i class="fa fa-exclamation-circle"></i></div>
                    <div class="col-sm-2"><i class="fa fa-exclamation-triangle"></i></div>
                    <div class="col-sm-2"><i class="fa fa-external-link"></i></div>
                    <div class="col-sm-2"><i class="fa fa-external-link-square"></i></div>
                    <div class="col-sm-2"><i class="fa fa-eye"></i></div>
                    <div class="col-sm-2"><i class="fa fa-eye-slash"></i></div>
                    <div class="col-sm-2"><i class="fa fa-eyedropper"></i></div>
                    <div class="col-sm-2"><i class="fa fa-fax"></i></div>
                    <div class="col-sm-2"><i class="fa fa-female"></i></div>
                    <div class="col-sm-2"><i class="fa fa-fighter-jet"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file-archive-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file-audio-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file-code-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file-excel-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file-image-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file-movie-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file-pdf-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file-photo-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file-picture-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file-powerpoint-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file-sound-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file-video-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file-word-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file-zip-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-film"></i></div>
                    <div class="col-sm-2"><i class="fa fa-filter"></i></div>
                    <div class="col-sm-2"><i class="fa fa-fire"></i></div>
                    <div class="col-sm-2"><i class="fa fa-fire-extinguisher"></i></div>
                    <div class="col-sm-2"><i class="fa fa-flag"></i></div>
                    <div class="col-sm-2"><i class="fa fa-flag-checkered"></i></div>
                    <div class="col-sm-2"><i class="fa fa-flag-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-flash"></i></div>
                    <div class="col-sm-2"><i class="fa fa-flask"></i></div>
                    <div class="col-sm-2"><i class="fa fa-folder"></i></div>
                    <div class="col-sm-2"><i class="fa fa-folder-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-folder-open"></i></div>
                    <div class="col-sm-2"><i class="fa fa-folder-open-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-frown-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-futbol-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-gamepad"></i></div>
                    <div class="col-sm-2"><i class="fa fa-gavel"></i></div>
                    <div class="col-sm-2"><i class="fa fa-gear"></i></div>
                    <div class="col-sm-2"><i class="fa fa-gears"></i></div>
                    <div class="col-sm-2"><i class="fa fa-gift"></i></div>
                    <div class="col-sm-2"><i class="fa fa-glass"></i></div>
                    <div class="col-sm-2"><i class="fa fa-globe"></i></div>
                    <div class="col-sm-2"><i class="fa fa-graduation-cap"></i></div>
                    <div class="col-sm-2"><i class="fa fa-group"></i></div>
                    <div class="col-sm-2"><i class="fa fa-hdd-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-headphones"></i></div>
                    <div class="col-sm-2"><i class="fa fa-heart"></i></div>
                    <div class="col-sm-2"><i class="fa fa-heart-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-history"></i></div>
                    <div class="col-sm-2"><i class="fa fa-home"></i></div>
                    <div class="col-sm-2"><i class="fa fa-image"></i></div>
                    <div class="col-sm-2"><i class="fa fa-inbox"></i></div>
                    <div class="col-sm-2"><i class="fa fa-info"></i></div>
                    <div class="col-sm-2"><i class="fa fa-info-circle"></i></div>
                    <div class="col-sm-2"><i class="fa fa-institution"></i></div>
                    <div class="col-sm-2"><i class="fa fa-key"></i></div>
                    <div class="col-sm-2"><i class="fa fa-keyboard-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-language"></i></div>
                    <div class="col-sm-2"><i class="fa fa-laptop"></i></div>
                    <div class="col-sm-2"><i class="fa fa-leaf"></i></div>
                    <div class="col-sm-2"><i class="fa fa-legal"></i></div>
                    <div class="col-sm-2"><i class="fa fa-lemon-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-level-down"></i></div>
                    <div class="col-sm-2"><i class="fa fa-level-up"></i></div>
                    <div class="col-sm-2"><i class="fa fa-life-bouy"></i></div>
                    <div class="col-sm-2"><i class="fa fa-life-buoy"></i></div>
                    <div class="col-sm-2"><i class="fa fa-life-ring"></i></div>
                    <div class="col-sm-2"><i class="fa fa-life-saver"></i></div>
                    <div class="col-sm-2"><i class="fa fa-lightbulb-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-line-chart"></i></div>
                    <div class="col-sm-2"><i class="fa fa-location-arrow"></i></div>
                    <div class="col-sm-2"><i class="fa fa-lock"></i></div>
                    <div class="col-sm-2"><i class="fa fa-magic"></i></div>
                    <div class="col-sm-2"><i class="fa fa-magnet"></i></div>
                    <div class="col-sm-2"><i class="fa fa-mail-forward"></i></div>
                    <div class="col-sm-2"><i class="fa fa-mail-reply"></i></div>
                    <div class="col-sm-2"><i class="fa fa-mail-reply-all"></i></div>
                    <div class="col-sm-2"><i class="fa fa-male"></i></div>
                    <div class="col-sm-2"><i class="fa fa-map-marker"></i></div>
                    <div class="col-sm-2"><i class="fa fa-meh-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-microphone"></i></div>
                    <div class="col-sm-2"><i class="fa fa-microphone-slash"></i></div>
                    <div class="col-sm-2"><i class="fa fa-minus"></i></div>
                    <div class="col-sm-2"><i class="fa fa-minus-circle"></i></div>
                    <div class="col-sm-2"><i class="fa fa-minus-square"></i></div>
                    <div class="col-sm-2"><i class="fa fa-minus-square-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-mobile"></i></div>
                    <div class="col-sm-2"><i class="fa fa-mobile-phone"></i></div>
                    <div class="col-sm-2"><i class="fa fa-money"></i></div>
                    <div class="col-sm-2"><i class="fa fa-moon-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-mortar-board"></i></div>
                    <div class="col-sm-2"><i class="fa fa-music"></i></div>
                    <div class="col-sm-2"><i class="fa fa-navicon"></i></div>
                    <div class="col-sm-2"><i class="fa fa-newspaper-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-paint-brush"></i></div>
                    <div class="col-sm-2"><i class="fa fa-paper-plane"></i></div>
                    <div class="col-sm-2"><i class="fa fa-paper-plane-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-paw"></i></div>
                    <div class="col-sm-2"><i class="fa fa-pencil"></i></div>
                    <div class="col-sm-2"><i class="fa fa-pencil-square"></i></div>
                    <div class="col-sm-2"><i class="fa fa-pencil-square-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-phone"></i></div>
                    <div class="col-sm-2"><i class="fa fa-phone-square"></i></div>
                    <div class="col-sm-2"><i class="fa fa-photo"></i></div>
                    <div class="col-sm-2"><i class="fa fa-picture-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-pie-chart"></i></div>
                    <div class="col-sm-2"><i class="fa fa-plane"></i></div>
                    <div class="col-sm-2"><i class="fa fa-plug"></i></div>
                    <div class="col-sm-2"><i class="fa fa-plus"></i></div>
                    <div class="col-sm-2"><i class="fa fa-plus-circle"></i></div>
                    <div class="col-sm-2"><i class="fa fa-plus-square"></i></div>
                    <div class="col-sm-2"><i class="fa fa-plus-square-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-power-off"></i></div>
                    <div class="col-sm-2"><i class="fa fa-print"></i></div>
                    <div class="col-sm-2"><i class="fa fa-puzzle-piece"></i></div>
                    <div class="col-sm-2"><i class="fa fa-qrcode"></i></div>
                    <div class="col-sm-2"><i class="fa fa-question"></i></div>
                    <div class="col-sm-2"><i class="fa fa-question-circle"></i></div>
                    <div class="col-sm-2"><i class="fa fa-quote-left"></i></div>
                    <div class="col-sm-2"><i class="fa fa-quote-right"></i></div>
                    <div class="col-sm-2"><i class="fa fa-random"></i></div>
                    <div class="col-sm-2"><i class="fa fa-recycle"></i></div>
                    <div class="col-sm-2"><i class="fa fa-refresh"></i></div>
                    <div class="col-sm-2"><i class="fa fa-remove"></i></div>
                    <div class="col-sm-2"><i class="fa fa-reorder"></i></div>
                    <div class="col-sm-2"><i class="fa fa-reply"></i></div>
                    <div class="col-sm-2"><i class="fa fa-reply-all"></i></div>
                    <div class="col-sm-2"><i class="fa fa-retweet"></i></div>
                    <div class="col-sm-2"><i class="fa fa-road"></i></div>
                    <div class="col-sm-2"><i class="fa fa-rocket"></i></div>
                    <div class="col-sm-2"><i class="fa fa-rss"></i></div>
                    <div class="col-sm-2"><i class="fa fa-rss-square"></i></div>
                    <div class="col-sm-2"><i class="fa fa-search"></i></div>
                    <div class="col-sm-2"><i class="fa fa-search-minus"></i></div>
                    <div class="col-sm-2"><i class="fa fa-search-plus"></i></div>
                    <div class="col-sm-2"><i class="fa fa-send"></i></div>
                    <div class="col-sm-2"><i class="fa fa-send-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-share"></i></div>
                    <div class="col-sm-2"><i class="fa fa-share-alt"></i></div>
                    <div class="col-sm-2"><i class="fa fa-share-alt-square"></i></div>
                    <div class="col-sm-2"><i class="fa fa-share-square"></i></div>
                    <div class="col-sm-2"><i class="fa fa-share-square-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-shield"></i></div>
                    <div class="col-sm-2"><i class="fa fa-shopping-cart"></i></div>
                    <div class="col-sm-2"><i class="fa fa-sign-in"></i></div>
                    <div class="col-sm-2"><i class="fa fa-sign-out"></i></div>
                    <div class="col-sm-2"><i class="fa fa-signal"></i></div>
                    <div class="col-sm-2"><i class="fa fa-sitemap"></i></div>
                    <div class="col-sm-2"><i class="fa fa-sliders"></i></div>
                    <div class="col-sm-2"><i class="fa fa-smile-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-soccer-ball-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-sort"></i></div>
                    <div class="col-sm-2"><i class="fa fa-sort-alpha-asc"></i></div>
                    <div class="col-sm-2"><i class="fa fa-sort-alpha-desc"></i></div>
                    <div class="col-sm-2"><i class="fa fa-sort-amount-asc"></i></div>
                    <div class="col-sm-2"><i class="fa fa-sort-amount-desc"></i></div>
                    <div class="col-sm-2"><i class="fa fa-sort-asc"></i></div>
                    <div class="col-sm-2"><i class="fa fa-sort-desc"></i></div>
                    <div class="col-sm-2"><i class="fa fa-sort-down"></i></div>
                    <div class="col-sm-2"><i class="fa fa-sort-numeric-asc"></i></div>
                    <div class="col-sm-2"><i class="fa fa-sort-numeric-desc"></i></div>
                    <div class="col-sm-2"><i class="fa fa-sort-up"></i></div>
                    <div class="col-sm-2"><i class="fa fa-space-shuttle"></i></div>
                    <div class="col-sm-2"><i class="fa fa-spinner"></i></div>
                    <div class="col-sm-2"><i class="fa fa-spoon"></i></div>
                    <div class="col-sm-2"><i class="fa fa-square"></i></div>
                    <div class="col-sm-2"><i class="fa fa-square-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-star"></i></div>
                    <div class="col-sm-2"><i class="fa fa-star-half"></i></div>
                    <div class="col-sm-2"><i class="fa fa-star-half-empty"></i></div>
                    <div class="col-sm-2"><i class="fa fa-star-half-full"></i></div>
                    <div class="col-sm-2"><i class="fa fa-star-half-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-star-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-suitcase"></i></div>
                    <div class="col-sm-2"><i class="fa fa-sun-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-support"></i></div>
                    <div class="col-sm-2"><i class="fa fa-tablet"></i></div>
                    <div class="col-sm-2"><i class="fa fa-tachometer"></i></div>
                    <div class="col-sm-2"><i class="fa fa-tag"></i></div>
                    <div class="col-sm-2"><i class="fa fa-tags"></i></div>
                    <div class="col-sm-2"><i class="fa fa-tasks"></i></div>
                    <div class="col-sm-2"><i class="fa fa-taxi"></i></div>
                    <div class="col-sm-2"><i class="fa fa-terminal"></i></div>
                    <div class="col-sm-2"><i class="fa fa-thumb-tack"></i></div>
                    <div class="col-sm-2"><i class="fa fa-thumbs-down"></i></div>
                    <div class="col-sm-2"><i class="fa fa-thumbs-o-down"></i></div>
                    <div class="col-sm-2"><i class="fa fa-thumbs-o-up"></i></div>
                    <div class="col-sm-2"><i class="fa fa-thumbs-up"></i></div>
                    <div class="col-sm-2"><i class="fa fa-ticket"></i></div>
                    <div class="col-sm-2"><i class="fa fa-times"></i></div>
                    <div class="col-sm-2"><i class="fa fa-times-circle"></i></div>
                    <div class="col-sm-2"><i class="fa fa-times-circle-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-tint"></i></div>
                    <div class="col-sm-2"><i class="fa fa-toggle-down"></i></div>
                    <div class="col-sm-2"><i class="fa fa-toggle-left"></i></div>
                    <div class="col-sm-2"><i class="fa fa-toggle-off"></i></div>
                    <div class="col-sm-2"><i class="fa fa-toggle-on"></i></div>
                    <div class="col-sm-2"><i class="fa fa-toggle-right"></i></div>
                    <div class="col-sm-2"><i class="fa fa-toggle-up"></i></div>
                    <div class="col-sm-2"><i class="fa fa-trash"></i></div>
                    <div class="col-sm-2"><i class="fa fa-trash-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-tree"></i></div>
                    <div class="col-sm-2"><i class="fa fa-trophy"></i></div>
                    <div class="col-sm-2"><i class="fa fa-truck"></i></div>
                    <div class="col-sm-2"><i class="fa fa-tty"></i></div>
                    <div class="col-sm-2"><i class="fa fa-umbrella"></i></div>
                    <div class="col-sm-2"><i class="fa fa-university"></i></div>
                    <div class="col-sm-2"><i class="fa fa-unlock"></i></div>
                    <div class="col-sm-2"><i class="fa fa-unlock-alt"></i></div>
                    <div class="col-sm-2"><i class="fa fa-unsorted"></i></div>
                    <div class="col-sm-2"><i class="fa fa-upload"></i></div>
                    <div class="col-sm-2"><i class="fa fa-user"></i></div>
                    <div class="col-sm-2"><i class="fa fa-users"></i></div>
                    <div class="col-sm-2"><i class="fa fa-video-camera"></i></div>
                    <div class="col-sm-2"><i class="fa fa-volume-down"></i></div>
                    <div class="col-sm-2"><i class="fa fa-volume-off"></i></div>
                    <div class="col-sm-2"><i class="fa fa-volume-up"></i></div>
                    <div class="col-sm-2"><i class="fa fa-warning"></i></div>
                    <div class="col-sm-2"><i class="fa fa-wheelchair"></i></div>
                    <div class="col-sm-2"><i class="fa fa-wifi"></i></div>
                    <div class="col-sm-2"><i class="fa fa-wrench"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file-archive-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file-audio-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file-code-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file-excel-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file-image-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file-movie-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file-pdf-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file-photo-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file-picture-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file-powerpoint-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file-sound-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file-text"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file-text-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file-video-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file-word-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file-zip-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-circle-o-notch"></i></div>
                    <div class="col-sm-2"><i class="fa fa-cog"></i></div>
                    <div class="col-sm-2"><i class="fa fa-gear"></i></div>
                    <div class="col-sm-2"><i class="fa fa-refresh"></i></div>
                    <div class="col-sm-2"><i class="fa fa-spinner"></i></div>
                    <div class="col-sm-2"><i class="fa fa-check-square"></i></div>
                    <div class="col-sm-2"><i class="fa fa-check-square-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-circle"></i></div>
                    <div class="col-sm-2"><i class="fa fa-circle-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-dot-circle-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-minus-square"></i></div>
                    <div class="col-sm-2"><i class="fa fa-minus-square-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-plus-square"></i></div>
                    <div class="col-sm-2"><i class="fa fa-plus-square-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-square"></i></div>
                    <div class="col-sm-2"><i class="fa fa-square-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-cc-amex"></i></div>
                    <div class="col-sm-2"><i class="fa fa-cc-discover"></i></div>
                    <div class="col-sm-2"><i class="fa fa-cc-mastercard"></i></div>
                    <div class="col-sm-2"><i class="fa fa-cc-paypal"></i></div>
                    <div class="col-sm-2"><i class="fa fa-cc-stripe"></i></div>
                    <div class="col-sm-2"><i class="fa fa-cc-visa"></i></div>
                    <div class="col-sm-2"><i class="fa fa-credit-card"></i></div>
                    <div class="col-sm-2"><i class="fa fa-google-wallet"></i></div>
                    <div class="col-sm-2"><i class="fa fa-paypal"></i></div>
                    <div class="col-sm-2"><i class="fa fa-area-chart"></i></div>
                    <div class="col-sm-2"><i class="fa fa-bar-chart"></i></div>
                    <div class="col-sm-2"><i class="fa fa-bar-chart-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-line-chart"></i></div>
                    <div class="col-sm-2"><i class="fa fa-pie-chart"></i></div>
                    <div class="col-sm-2"><i class="fa fa-bitcoin"></i></div>
                    <div class="col-sm-2"><i class="fa fa-btc"></i></div>
                    <div class="col-sm-2"><i class="fa fa-cny"></i></div>
                    <div class="col-sm-2"><i class="fa fa-dollar"></i></div>
                    <div class="col-sm-2"><i class="fa fa-eur"></i></div>
                    <div class="col-sm-2"><i class="fa fa-euro"></i></div>
                    <div class="col-sm-2"><i class="fa fa-gbp"></i></div>
                    <div class="col-sm-2"><i class="fa fa-ils"></i></div>
                    <div class="col-sm-2"><i class="fa fa-inr"></i></div>
                    <div class="col-sm-2"><i class="fa fa-jpy"></i></div>
                    <div class="col-sm-2"><i class="fa fa-krw"></i></div>
                    <div class="col-sm-2"><i class="fa fa-money"></i></div>
                    <div class="col-sm-2"><i class="fa fa-rmb"></i></div>
                    <div class="col-sm-2"><i class="fa fa-rouble"></i></div>
                    <div class="col-sm-2"><i class="fa fa-rub"></i></div>
                    <div class="col-sm-2"><i class="fa fa-ruble"></i></div>
                    <div class="col-sm-2"><i class="fa fa-rupee"></i></div>
                    <div class="col-sm-2"><i class="fa fa-shekel"></i></div>
                    <div class="col-sm-2"><i class="fa fa-sheqel"></i></div>
                    <div class="col-sm-2"><i class="fa fa-try"></i></div>
                    <div class="col-sm-2"><i class="fa fa-turkish-lira"></i></div>
                    <div class="col-sm-2"><i class="fa fa-usd"></i></div>
                    <div class="col-sm-2"><i class="fa fa-won"></i></div>
                    <div class="col-sm-2"><i class="fa fa-yen"></i></div>
                    <div class="col-sm-2"><i class="fa fa-align-center"></i></div>
                    <div class="col-sm-2"><i class="fa fa-align-justify"></i></div>
                    <div class="col-sm-2"><i class="fa fa-align-left"></i></div>
                    <div class="col-sm-2"><i class="fa fa-align-right"></i></div>
                    <div class="col-sm-2"><i class="fa fa-bold"></i></div>
                    <div class="col-sm-2"><i class="fa fa-chain"></i></div>
                    <div class="col-sm-2"><i class="fa fa-chain-broken"></i></div>
                    <div class="col-sm-2"><i class="fa fa-clipboard"></i></div>
                    <div class="col-sm-2"><i class="fa fa-columns"></i></div>
                    <div class="col-sm-2"><i class="fa fa-copy"></i></div>
                    <div class="col-sm-2"><i class="fa fa-cut"></i></div>
                    <div class="col-sm-2"><i class="fa fa-dedent"></i></div>
                    <div class="col-sm-2"><i class="fa fa-eraser"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file-text"></i></div>
                    <div class="col-sm-2"><i class="fa fa-file-text-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-files-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-floppy-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-font"></i></div>
                    <div class="col-sm-2"><i class="fa fa-header"></i></div>
                    <div class="col-sm-2"><i class="fa fa-indent"></i></div>
                    <div class="col-sm-2"><i class="fa fa-italic"></i></div>
                    <div class="col-sm-2"><i class="fa fa-link"></i></div>
                    <div class="col-sm-2"><i class="fa fa-list"></i></div>
                    <div class="col-sm-2"><i class="fa fa-list-alt"></i></div>
                    <div class="col-sm-2"><i class="fa fa-list-ol"></i></div>
                    <div class="col-sm-2"><i class="fa fa-list-ul"></i></div>
                    <div class="col-sm-2"><i class="fa fa-outdent"></i></div>
                    <div class="col-sm-2"><i class="fa fa-paperclip"></i></div>
                    <div class="col-sm-2"><i class="fa fa-paragraph"></i></div>
                    <div class="col-sm-2"><i class="fa fa-paste"></i></div>
                    <div class="col-sm-2"><i class="fa fa-repeat"></i></div>
                    <div class="col-sm-2"><i class="fa fa-rotate-left"></i></div>
                    <div class="col-sm-2"><i class="fa fa-rotate-right"></i></div>
                    <div class="col-sm-2"><i class="fa fa-save"></i></div>
                    <div class="col-sm-2"><i class="fa fa-scissors"></i></div>
                    <div class="col-sm-2"><i class="fa fa-strikethrough"></i></div>
                    <div class="col-sm-2"><i class="fa fa-subscript"></i></div>
                    <div class="col-sm-2"><i class="fa fa-superscript"></i></div>
                    <div class="col-sm-2"><i class="fa fa-table"></i></div>
                    <div class="col-sm-2"><i class="fa fa-text-height"></i></div>
                    <div class="col-sm-2"><i class="fa fa-text-width"></i></div>
                    <div class="col-sm-2"><i class="fa fa-th"></i></div>
                    <div class="col-sm-2"><i class="fa fa-th-large"></i></div>
                    <div class="col-sm-2"><i class="fa fa-th-list"></i></div>
                    <div class="col-sm-2"><i class="fa fa-underline"></i></div>
                    <div class="col-sm-2"><i class="fa fa-undo"></i></div>
                    <div class="col-sm-2"><i class="fa fa-unlink"></i></div>
                    <div class="col-sm-2"><i class="fa fa-angle-double-down"></i></div>
                    <div class="col-sm-2"><i class="fa fa-angle-double-left"></i></div>
                    <div class="col-sm-2"><i class="fa fa-angle-double-right"></i></div>
                    <div class="col-sm-2"><i class="fa fa-angle-double-up"></i></div>
                    <div class="col-sm-2"><i class="fa fa-angle-down"></i></div>
                    <div class="col-sm-2"><i class="fa fa-angle-left"></i></div>
                    <div class="col-sm-2"><i class="fa fa-angle-right"></i></div>
                    <div class="col-sm-2"><i class="fa fa-angle-up"></i></div>
                    <div class="col-sm-2"><i class="fa fa-arrow-circle-down"></i></div>
                    <div class="col-sm-2"><i class="fa fa-arrow-circle-left"></i></div>
                    <div class="col-sm-2"><i class="fa fa-arrow-circle-o-down"></i></div>
                    <div class="col-sm-2"><i class="fa fa-arrow-circle-o-left"></i></div>
                    <div class="col-sm-2"><i class="fa fa-arrow-circle-o-right"></i></div>
                    <div class="col-sm-2"><i class="fa fa-arrow-circle-o-up"></i></div>
                    <div class="col-sm-2"><i class="fa fa-arrow-circle-right"></i></div>
                    <div class="col-sm-2"><i class="fa fa-arrow-circle-up"></i></div>
                    <div class="col-sm-2"><i class="fa fa-arrow-down"></i></div>
                    <div class="col-sm-2"><i class="fa fa-arrow-left"></i></div>
                    <div class="col-sm-2"><i class="fa fa-arrow-right"></i></div>
                    <div class="col-sm-2"><i class="fa fa-arrow-up"></i></div>
                    <div class="col-sm-2"><i class="fa fa-arrows"></i></div>
                    <div class="col-sm-2"><i class="fa fa-arrows-alt"></i></div>
                    <div class="col-sm-2"><i class="fa fa-arrows-h"></i></div>
                    <div class="col-sm-2"><i class="fa fa-arrows-v"></i></div>
                    <div class="col-sm-2"><i class="fa fa-caret-down"></i></div>
                    <div class="col-sm-2"><i class="fa fa-caret-left"></i></div>
                    <div class="col-sm-2"><i class="fa fa-caret-right"></i></div>
                    <div class="col-sm-2"><i class="fa fa-caret-square-o-down"></i></div>
                    <div class="col-sm-2"><i class="fa fa-caret-square-o-left"></i></div>
                    <div class="col-sm-2"><i class="fa fa-caret-square-o-right"></i></div>
                    <div class="col-sm-2"><i class="fa fa-caret-square-o-up"></i></div>
                    <div class="col-sm-2"><i class="fa fa-caret-up"></i></div>
                    <div class="col-sm-2"><i class="fa fa-chevron-circle-down"></i></div>
                    <div class="col-sm-2"><i class="fa fa-chevron-circle-left"></i></div>
                    <div class="col-sm-2"><i class="fa fa-chevron-circle-right"></i></div>
                    <div class="col-sm-2"><i class="fa fa-chevron-circle-up"></i></div>
                    <div class="col-sm-2"><i class="fa fa-chevron-down"></i></div>
                    <div class="col-sm-2"><i class="fa fa-chevron-left"></i></div>
                    <div class="col-sm-2"><i class="fa fa-chevron-right"></i></div>
                    <div class="col-sm-2"><i class="fa fa-chevron-up"></i></div>
                    <div class="col-sm-2"><i class="fa fa-hand-o-down"></i></div>
                    <div class="col-sm-2"><i class="fa fa-hand-o-left"></i></div>
                    <div class="col-sm-2"><i class="fa fa-hand-o-right"></i></div>
                    <div class="col-sm-2"><i class="fa fa-hand-o-up"></i></div>
                    <div class="col-sm-2"><i class="fa fa-long-arrow-down"></i></div>
                    <div class="col-sm-2"><i class="fa fa-long-arrow-left"></i></div>
                    <div class="col-sm-2"><i class="fa fa-long-arrow-right"></i></div>
                    <div class="col-sm-2"><i class="fa fa-long-arrow-up"></i></div>
                    <div class="col-sm-2"><i class="fa fa-toggle-down"></i></div>
                    <div class="col-sm-2"><i class="fa fa-toggle-left"></i></div>
                    <div class="col-sm-2"><i class="fa fa-toggle-right"></i></div>
                    <div class="col-sm-2"><i class="fa fa-toggle-up"></i></div>
                    <div class="col-sm-2"><i class="fa fa-arrows-alt"></i></div>
                    <div class="col-sm-2"><i class="fa fa-backward"></i></div>
                    <div class="col-sm-2"><i class="fa fa-compress"></i></div>
                    <div class="col-sm-2"><i class="fa fa-eject"></i></div>
                    <div class="col-sm-2"><i class="fa fa-expand"></i></div>
                    <div class="col-sm-2"><i class="fa fa-fast-backward"></i></div>
                    <div class="col-sm-2"><i class="fa fa-fast-forward"></i></div>
                    <div class="col-sm-2"><i class="fa fa-forward"></i></div>
                    <div class="col-sm-2"><i class="fa fa-pause"></i></div>
                    <div class="col-sm-2"><i class="fa fa-play"></i></div>
                    <div class="col-sm-2"><i class="fa fa-play-circle"></i></div>
                    <div class="col-sm-2"><i class="fa fa-play-circle-o"></i></div>
                    <div class="col-sm-2"><i class="fa fa-step-backward"></i></div>
                    <div class="col-sm-2"><i class="fa fa-step-forward"></i></div>
                    <div class="col-sm-2"><i class="fa fa-stop"></i></div>
                    <div class="col-sm-2"><i class="fa fa-youtube-play"></i></div>
                    <div class="col-sm-2"><i class="fa fa-adn"></i></div>
                    <div class="col-sm-2"><i class="fa fa-android"></i></div>
                    <div class="col-sm-2"><i class="fa fa-apple"></i></div>
                    <div class="col-sm-2"><i class="fa fa-behance"></i></div>
                    <div class="col-sm-2"><i class="fa fa-behance-square"></i></div>
                    <div class="col-sm-2"><i class="fa fa-bitbucket"></i></div>
                    <div class="col-sm-2"><i class="fa fa-bitbucket-square"></i></div>
                    <div class="col-sm-2"><i class="fa fa-bitcoin"></i></div>
                    <div class="col-sm-2"><i class="fa fa-btc"></i></div>
                    <div class="col-sm-2"><i class="fa fa-cc-amex"></i></div>
                    <div class="col-sm-2"><i class="fa fa-cc-discover"></i></div>
                    <div class="col-sm-2"><i class="fa fa-cc-mastercard"></i></div>
                    <div class="col-sm-2"><i class="fa fa-cc-paypal"></i></div>
                    <div class="col-sm-2"><i class="fa fa-cc-stripe"></i></div>
                    <div class="col-sm-2"><i class="fa fa-cc-visa"></i></div>
                    <div class="col-sm-2"><i class="fa fa-codepen"></i></div>
                    <div class="col-sm-2"><i class="fa fa-css3"></i></div>
                    <div class="col-sm-2"><i class="fa fa-delicious"></i></div>
                    <div class="col-sm-2"><i class="fa fa-deviantart"></i></div>
                    <div class="col-sm-2"><i class="fa fa-digg"></i></div>
                    <div class="col-sm-2"><i class="fa fa-dribbble"></i></div>
                    <div class="col-sm-2"><i class="fa fa-dropbox"></i></div>
                    <div class="col-sm-2"><i class="fa fa-drupal"></i></div>
                    <div class="col-sm-2"><i class="fa fa-empire"></i></div>
                    <div class="col-sm-2"><i class="fa fa-facebook"></i></div>
                    <div class="col-sm-2"><i class="fa fa-facebook-square"></i></div>
                    <div class="col-sm-2"><i class="fa fa-flickr"></i></div>
                    <div class="col-sm-2"><i class="fa fa-foursquare"></i></div>
                    <div class="col-sm-2"><i class="fa fa-ge"></i></div>
                    <div class="col-sm-2"><i class="fa fa-git"></i></div>
                    <div class="col-sm-2"><i class="fa fa-git-square"></i></div>
                    <div class="col-sm-2"><i class="fa fa-github"></i></div>
                    <div class="col-sm-2"><i class="fa fa-github-alt"></i></div>
                    <div class="col-sm-2"><i class="fa fa-github-square"></i></div>
                    <div class="col-sm-2"><i class="fa fa-gittip"></i></div>
                    <div class="col-sm-2"><i class="fa fa-google"></i></div>
                    <div class="col-sm-2"><i class="fa fa-google-plus"></i></div>
                    <div class="col-sm-2"><i class="fa fa-google-plus-square"></i></div>
                    <div class="col-sm-2"><i class="fa fa-google-wallet"></i></div>
                    <div class="col-sm-2"><i class="fa fa-hacker-news"></i></div>
                    <div class="col-sm-2"><i class="fa fa-html5"></i></div>
                    <div class="col-sm-2"><i class="fa fa-instagram"></i></div>
                    <div class="col-sm-2"><i class="fa fa-ioxhost"></i></div>
                    <div class="col-sm-2"><i class="fa fa-joomla"></i></div>
                    <div class="col-sm-2"><i class="fa fa-jsfiddle"></i></div>
                    <div class="col-sm-2"><i class="fa fa-lastfm"></i></div>
                    <div class="col-sm-2"><i class="fa fa-lastfm-square"></i></div>
                    <div class="col-sm-2"><i class="fa fa-linkedin"></i></div>
                    <div class="col-sm-2"><i class="fa fa-linkedin-square"></i></div>
                    <div class="col-sm-2"><i class="fa fa-linux"></i></div>
                    <div class="col-sm-2"><i class="fa fa-maxcdn"></i></div>
                    <div class="col-sm-2"><i class="fa fa-meanpath"></i></div>
                    <div class="col-sm-2"><i class="fa fa-openid"></i></div>
                    <div class="col-sm-2"><i class="fa fa-pagelines"></i></div>
                    <div class="col-sm-2"><i class="fa fa-paypal"></i></div>
                    <div class="col-sm-2"><i class="fa fa-pied-piper"></i></div>
                    <div class="col-sm-2"><i class="fa fa-pied-piper-alt"></i></div>
                    <div class="col-sm-2"><i class="fa fa-pinterest"></i></div>
                    <div class="col-sm-2"><i class="fa fa-pinterest-square"></i></div>
                    <div class="col-sm-2"><i class="fa fa-qq"></i></div>
                    <div class="col-sm-2"><i class="fa fa-ra"></i></div>
                    <div class="col-sm-2"><i class="fa fa-rebel"></i></div>
                    <div class="col-sm-2"><i class="fa fa-reddit"></i></div>
                    <div class="col-sm-2"><i class="fa fa-reddit-square"></i></div>
                    <div class="col-sm-2"><i class="fa fa-renren"></i></div>
                    <div class="col-sm-2"><i class="fa fa-share-alt"></i></div>
                    <div class="col-sm-2"><i class="fa fa-share-alt-square"></i></div>
                    <div class="col-sm-2"><i class="fa fa-skype"></i></div>
                    <div class="col-sm-2"><i class="fa fa-slack"></i></div>
                    <div class="col-sm-2"><i class="fa fa-slideshare"></i>
                  </div>
                  <div class="col-sm-2"><i class="fa fa-soundcloud"></i></div>
                  <div class="col-sm-2"><i class="fa fa-spotify"></i></div>
                  <div class="col-sm-2"><i class="fa fa-stack-exchange"></i></div>
                  <div class="col-sm-2"><i class="fa fa-stack-overflow"></i></div>
                  <div class="col-sm-2"><i class="fa fa-steam"></i></div>
                  <div class="col-sm-2"><i class="fa fa-steam-square"></i></div>
                  <div class="col-sm-2"><i class="fa fa-stumbleupon"></i></div>
                  <div class="col-sm-2"><i class="fa fa-stumbleupon-circle"></i></div>
                  <div class="col-sm-2"><i class="fa fa-tencent-weibo"></i></div>
                  <div class="col-sm-2"><i class="fa fa-trello"></i></div>
                  <div class="col-sm-2"><i class="fa fa-tumblr"></i></div>
                  <div class="col-sm-2"><i class="fa fa-tumblr-square"></i></div>
                  <div class="col-sm-2"><i class="fa fa-twitch"></i></div>
                  <div class="col-sm-2"><i class="fa fa-twitter"></i></div>
                  <div class="col-sm-2"><i class="fa fa-twitter-square"></i></div>
                  <div class="col-sm-2"><i class="fa fa-vimeo-square"></i></div>
                  <div class="col-sm-2"><i class="fa fa-vine"></i></div>
                  <div class="col-sm-2"><i class="fa fa-vk"></i></div>
                  <div class="col-sm-2"><i class="fa fa-wechat"></i></div>
                  <div class="col-sm-2"><i class="fa fa-weibo"></i></div>
                  <div class="col-sm-2"><i class="fa fa-weixin"></i></div>
                  <div class="col-sm-2"><i class="fa fa-windows"></i></div>
                  <div class="col-sm-2"><i class="fa fa-wordpress"></i></div>
                  <div class="col-sm-2"><i class="fa fa-xing"></i></div>
                  <div class="col-sm-2"><i class="fa fa-xing-square"></i></div>
                  <div class="col-sm-2"><i class="fa fa-yahoo"></i></div>
                  <div class="col-sm-2"><i class="fa fa-yelp"></i></div>
                  <div class="col-sm-2"><i class="fa fa-youtube"></i></div>
                  <div class="col-sm-2"><i class="fa fa-youtube-play"></i></div>
                  <div class="col-sm-2"><i class="fa fa-youtube-square"></i></div>
                  <div class="col-sm-2"><i class="fa fa-ambulance"></i></div>
                  <div class="col-sm-2"><i class="fa fa-h-square"></i></div>
                  <div class="col-sm-2"><i class="fa fa-hospital-o"></i></div>
                  <div class="col-sm-2"><i class="fa fa-medkit"></i></div>
                  <div class="col-sm-2"><i class="fa fa-plus-square"></i></div>
                  <div class="col-sm-2"><i class="fa fa-stethoscope"></i></div>
                  <div class="col-sm-2"><i class="fa fa-user-md"></i></div>
                  <div class="col-sm-2"><i class="fa fa-wheelchair"></i></div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <h3 class="m-t-40"><strong>Glyphicons</strong></h3>
                  </div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-asterisk"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-plus"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-euro"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-minus"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-cloud"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-envelope"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-pencil"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-glass"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-music"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-search"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-heart"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-star"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-star-empty"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-user"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-film"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-th-large"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-th"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-th-list"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-ok"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-remove"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-zoom-in"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-zoom-out"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-off"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-signal"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-cog"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-trash"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-home"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-file"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-time"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-road"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-download-alt"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-download"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-upload"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-inbox"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-play-circle"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-repeat"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-refresh"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-list-alt"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-lock"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-flag"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-headphones"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-volume-off"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-volume-down"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-volume-up"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-qrcode"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-barcode"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-tag"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-tags"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-book"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-bookmark"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-print"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-camera"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-font"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-bold"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-italic"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-text-height"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-text-width"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-align-left"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-align-center"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-align-right"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-align-justify"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-list"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-indent-left"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-indent-right"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-facetime-video"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-picture"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-map-marker"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-adjust"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-tint"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-edit"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-share"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-check"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-move"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-step-backward"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-fast-backward"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-backward"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-play"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-pause"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-stop"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-forward"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-fast-forward"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-step-forward"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-eject"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-chevron-left"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-chevron-right"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-plus-sign"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-minus-sign"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-remove-sign"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-ok-sign"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-question-sign"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-info-sign"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-screenshot"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-remove-circle"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-ok-circle"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-ban-circle"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-arrow-left"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-arrow-right"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-arrow-up"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-arrow-down"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-share-alt"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-resize-full"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-resize-small"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-exclamation-sign"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-gift"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-leaf"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-fire"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-eye-open"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-eye-close"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-warning-sign"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-plane"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-calendar"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-random"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-comment"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-magnet"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-chevron-up"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-chevron-down"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-retweet"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-shopping-cart"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-folder-close"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-folder-open"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-resize-vertical"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-resize-horizontal"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-hdd"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-bullhorn"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-bell"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-certificate"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-thumbs-up"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-thumbs-down"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-hand-right"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-hand-left"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-hand-up"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-hand-down"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-circle-arrow-right"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-circle-arrow-left"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-circle-arrow-up"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-circle-arrow-down"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-globe"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-wrench"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-tasks"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-filter"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-briefcase"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-fullscreen"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-dashboard"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-paperclip"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-heart-empty"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-link"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-phone"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-pushpin"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-usd"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-gbp"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-sort"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-sort-by-alphabet"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-sort-by-alphabet-alt"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-sort-by-order"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-sort-by-order-alt"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-sort-by-attributes"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-sort-by-attributes-alt"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-unchecked"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-expand"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-collapse-down"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-collapse-up"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-log-in"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-flash"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-log-out"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-new-window"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-record"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-save"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-open"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-saved"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-import"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-export"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-send"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-floppy-disk"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-floppy-saved"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-floppy-remove"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-floppy-save"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-floppy-open"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-credit-card"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-transfer"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-cutlery"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-header"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-compressed"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-earphone"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-phone-alt"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-tower"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-stats"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-sd-video"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-hd-video"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-subtitles"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-sound-stereo"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-sound-dolby"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-sound-5-1"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-sound-6-1"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-sound-7-1"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-copyright-mark"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-registration-mark"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-cloud-download"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-cloud-upload"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-tree-conifer"></i></div>
                  <div class="col-sm-2"><i class="glyphicon glyphicon-tree-deciduous"></i></div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <h3 class="m-t-40"><strong>Line Icons</strong></h3>
                  </div>
                  <div class="col-sm-2"><i class="icon icons-alerts-01"></i></div>
                  <div class="col-sm-2"><i class="icon icons-alerts-02"></i></div>
                  <div class="col-sm-2"><i class="icon icons-alerts-03"></i></div>
                  <div class="col-sm-2"><i class="icon icons-alerts-04"></i></div>
                  <div class="col-sm-2"><i class="icon icons-alerts-05"></i></div>
                  <div class="col-sm-2"><i class="icon icons-alerts-06"></i></div>
                  <div class="col-sm-2"><i class="icon icons-alerts-07"></i></div>
                  <div class="col-sm-2"><i class="icon icons-alerts-08"></i></div>
                  <div class="col-sm-2"><i class="icon icons-alerts-09"></i></div>
                  <div class="col-sm-2"><i class="icon icons-alerts-10"></i></div>
                  <div class="col-sm-2"><i class="icon icons-alerts-11"></i></div>
                  <div class="col-sm-2"><i class="icon icons-alerts-12"></i></div>
                  <div class="col-sm-2"><i class="icon icons-alerts-13"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-08"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-07"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-06"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-05"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-03"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-04"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-02"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-01"></i></div>
                  <div class="col-sm-2"><i class="icon icons-alerts-18"></i></div>
                  <div class="col-sm-2"><i class="icon icons-alerts-17"></i></div>
                  <div class="col-sm-2"><i class="icon icons-alerts-16"></i></div>
                  <div class="col-sm-2"><i class="icon icons-alerts-15"></i></div>
                  <div class="col-sm-2"><i class="icon icons-alerts-14"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-09"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-10"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-11"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-12"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-13"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-14"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-15"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-16"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-22"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-17"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-18"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-19"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-20"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-21"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-30"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-31"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-32"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-33"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-34"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-23"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-24"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-25"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-26"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-27"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-28"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-29"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-36"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-37"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-38"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-39"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-40"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-41"></i></div>
                  <div class="col-sm-2"><i class="icon icons-badges-votes-01"></i></div>
                  <div class="col-sm-2"><i class="icon icons-badges-votes-02"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-30"></i></div>
                  <div class="col-sm-2"><i class="icon icons-badges-votes-03"></i></div>
                  <div class="col-sm-2"><i class="icon icons-badges-votes-04"></i></div>
                  <div class="col-sm-2"><i class="icon icons-badges-votes-05"></i></div>
                  <div class="col-sm-2"><i class="icon icons-badges-votes-06"></i></div>
                  <div class="col-sm-2"><i class="icon icons-arrows-35"></i></div>
                  <div class="col-sm-2"><i class="icon icons-badges-votes-07"></i></div>
                  <div class="col-sm-2"><i class="icon icons-badges-votes-08"></i></div>
                  <div class="col-sm-2"><i class="icon icons-badges-votes-09"></i></div>
                  <div class="col-sm-2"><i class="icon icons-badges-votes-10"></i></div>
                  <div class="col-sm-2"><i class="icon icons-badges-votes-11"></i></div>
                  <div class="col-sm-2"><i class="icon icons-badges-votes-12"></i></div>
                  <div class="col-sm-2"><i class="icon icons-badges-votes-13"></i></div>
                  <div class="col-sm-2"><i class="icon icons-badges-votes-14"></i></div>
                  <div class="col-sm-2"><i class="icon icons-badges-votes-15"></i></div>
                  <div class="col-sm-2"><i class="icon icons-badges-votes-16"></i></div>
                  <div class="col-sm-2"><i class="icon icons-chat-messages-01"></i></div>
                  <div class="col-sm-2"><i class="icon icons-chat-messages-02"></i></div>
                  <div class="col-sm-2"><i class="icon icons-chat-messages-03"></i></div>
                  <div class="col-sm-2"><i class="icon icons-chat-messages-04"></i></div>
                  <div class="col-sm-2"><i class="icon icons-chat-messages-05"></i></div>
                  <div class="col-sm-2"><i class="icon icons-chat-messages-06"></i></div>
                  <div class="col-sm-2"><i class="icon icons-chat-messages-07"></i></div>
                  <div class="col-sm-2"><i class="icon icons-chat-messages-08"></i></div>
                  <div class="col-sm-2"><i class="icon icons-chat-messages-09"></i></div>
                  <div class="col-sm-2"><i class="icon icons-chat-messages-10"></i></div>
                  <div class="col-sm-2"><i class="icon icons-chat-messages-11"></i></div>
                  <div class="col-sm-2"><i class="icon icons-chat-messages-12"></i></div>
                  <div class="col-sm-2"><i class="icon icons-chat-messages-13"></i></div>
                  <div class="col-sm-2"><i class="icon icons-chat-messages-14"></i></div>
                  <div class="col-sm-2"><i class="icon icons-chat-messages-15"></i></div>
                  <div class="col-sm-2"><i class="icon icons-chat-messages-16"></i></div>
                  <div class="col-sm-2"><i class="icon icons-documents-bookmarks-01"></i></div>
                  <div class="col-sm-2"><i class="icon icons-documents-bookmarks-02"></i></div>
                  <div class="col-sm-2"><i class="icon icons-documents-bookmarks-03"></i></div>
                  <div class="col-sm-2"><i class="icon icons-documents-bookmarks-04"></i></div>
                  <div class="col-sm-2"><i class="icon icons-documents-bookmarks-05"></i></div>
                  <div class="col-sm-2"><i class="icon icons-documents-bookmarks-06"></i></div>
                  <div class="col-sm-2"><i class="icon icons-documents-bookmarks-07"></i></div>
                  <div class="col-sm-2"><i class="icon icons-documents-bookmarks-08"></i></div>
                  <div class="col-sm-2"><i class="icon icons-documents-bookmarks-09"></i></div>
                  <div class="col-sm-2"><i class="icon icons-documents-bookmarks-10"></i></div>
                  <div class="col-sm-2"><i class="icon icons-documents-bookmarks-11"></i></div>
                  <div class="col-sm-2"><i class="icon icons-documents-bookmarks-12"></i></div>
                  <div class="col-sm-2"><i class="icon icons-documents-bookmarks-13"></i></div>
                  <div class="col-sm-2"><i class="icon icons-documents-bookmarks-14"></i></div>
                  <div class="col-sm-2"><i class="icon icons-documents-bookmarks-15"></i></div>
                  <div class="col-sm-2"><i class="icon icons-documents-bookmarks-16"></i></div>
                  <div class="col-sm-2"><i class="icon icons-ecology-01"></i></div>
                  <div class="col-sm-2"><i class="icon icons-ecology-02"></i></div>
                  <div class="col-sm-2"><i class="icon icons-ecology-03"></i></div>
                  <div class="col-sm-2"><i class="icon icons-ecology-04"></i></div>
                  <div class="col-sm-2"><i class="icon icons-ecology-05"></i></div>
                  <div class="col-sm-2"><i class="icon icons-ecology-06"></i></div>
                  <div class="col-sm-2"><i class="icon icons-ecology-07"></i></div>
                  <div class="col-sm-2"><i class="icon icons-ecology-08"></i></div>
                  <div class="col-sm-2"><i class="icon icons-ecology-09"></i></div>
                  <div class="col-sm-2"><i class="icon icons-ecology-10"></i></div>
                  <div class="col-sm-2"><i class="icon icons-ecology-11"></i></div>
                  <div class="col-sm-2"><i class="icon icons-ecology-12"></i></div>
                  <div class="col-sm-2"><i class="icon icons-ecology-13"></i></div>
                  <div class="col-sm-2"><i class="icon icons-ecology-14"></i></div>
                  <div class="col-sm-2"><i class="icon icons-ecology-15"></i></div>
                  <div class="col-sm-2"><i class="icon icons-ecology-16"></i></div>
                  <div class="col-sm-2"><i class="icon icons-education-science-01"></i></div>
                  <div class="col-sm-2"><i class="icon icons-education-science-02"></i></div>
                  <div class="col-sm-2"><i class="icon icons-education-science-03"></i></div>
                  <div class="col-sm-2"><i class="icon icons-education-science-04"></i></div>
                  <div class="col-sm-2"><i class="icon icons-education-science-05"></i></div>
                  <div class="col-sm-2"><i class="icon icons-education-science-06"></i></div>
                  <div class="col-sm-2"><i class="icon icons-education-science-07"></i></div>
                  <div class="col-sm-2"><i class="icon icons-education-science-08"></i></div>
                  <div class="col-sm-2"><i class="icon icons-education-science-09"></i></div>
                  <div class="col-sm-2"><i class="icon icons-education-science-10"></i></div>
                  <div class="col-sm-2"><i class="icon icons-education-science-11"></i></div>
                  <div class="col-sm-2"><i class="icon icons-education-science-12"></i></div>
                  <div class="col-sm-2"><i class="icon icons-education-science-13"></i></div>
                  <div class="col-sm-2"><i class="icon icons-education-science-14"></i></div>
                  <div class="col-sm-2"><i class="icon icons-education-science-15"></i></div>
                  <div class="col-sm-2"><i class="icon icons-education-science-16"></i></div>
                  <div class="col-sm-2"><i class="icon icons-education-science-17"></i></div>
                  <div class="col-sm-2"><i class="icon icons-education-science-18"></i></div>
                  <div class="col-sm-2"><i class="icon icons-education-science-19"></i></div>
                  <div class="col-sm-2"><i class="icon icons-education-science-20"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-01"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-02"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-03"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-04"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-05"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-06"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-07"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-08"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-09"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-10"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-11"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-12"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-13"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-14"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-15"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-16"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-17"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-18"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-19"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-20"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-21"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-22"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-23"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-24"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-25"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-26"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-27"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-28"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-29"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-30"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-31"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-32"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-33"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-34"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-35"></i></div>
                  <div class="col-sm-2"><i class="icon icons-emoticons-artboard-80"></i></div>
                  <div class="col-sm-2"><i class="icon icons-faces-users-01"></i></div>
                  <div class="col-sm-2"><i class="icon icons-faces-users-02"></i></div>
                  <div class="col-sm-2"><i class="icon icons-faces-users-03"></i></div>
                  <div class="col-sm-2"><i class="icon icons-faces-users-04"></i></div>
                  <div class="col-sm-2"><i class="icon icons-faces-users-05"></i></div>
                  <div class="col-sm-2"><i class="icon icons-faces-users-06"></i></div>
                  <div class="col-sm-2"><i class="icon icons-faces-users-07"></i></div>
                  <div class="col-sm-2"><i class="icon icons-filetypes-01"></i></div>
                  <div class="col-sm-2"><i class="icon icons-filetypes-02"></i></div>
                  <div class="col-sm-2"><i class="icon icons-filetypes-03"></i></div>
                  <div class="col-sm-2"><i class="icon icons-filetypes-04"></i></div>
                  <div class="col-sm-2"><i class="icon icons-filetypes-05"></i></div>
                  <div class="col-sm-2"><i class="icon icons-filetypes-06"></i></div>
                  <div class="col-sm-2"><i class="icon icons-filetypes-07"></i></div>
                  <div class="col-sm-2"><i class="icon icons-filetypes-08"></i></div>
                  <div class="col-sm-2"><i class="icon icons-filetypes-09"></i></div>
                  <div class="col-sm-2"><i class="icon icons-filetypes-10"></i></div>
                  <div class="col-sm-2"><i class="icon icons-filetypes-11"></i></div>
                  <div class="col-sm-2"><i class="icon icons-filetypes-12"></i></div>
                  <div class="col-sm-2"><i class="icon icons-filetypes-13"></i></div>
                  <div class="col-sm-2"><i class="icon icons-filetypes-14"></i></div>
                  <div class="col-sm-2"><i class="icon icons-filetypes-15"></i></div>
                  <div class="col-sm-2"><i class="icon icons-filetypes-16"></i></div>
                  <div class="col-sm-2"><i class="icon icons-filetypes-17"></i></div>
                  <div class="col-sm-2"><i class="icon icons-food-01"></i></div>
                  <div class="col-sm-2"><i class="icon icons-food-02"></i></div>
                  <div class="col-sm-2"><i class="icon icons-food-03"></i></div>
                  <div class="col-sm-2"><i class="icon icons-food-04"></i></div>
                  <div class="col-sm-2"><i class="icon icons-food-05"></i></div>
                  <div class="col-sm-2"><i class="icon icons-food-06"></i></div>
                  <div class="col-sm-2"><i class="icon icons-food-07"></i></div>
                  <div class="col-sm-2"><i class="icon icons-food-08"></i></div>
                  <div class="col-sm-2"><i class="icon icons-food-09"></i></div>
                  <div class="col-sm-2"><i class="icon icons-food-10"></i></div>
                  <div class="col-sm-2"><i class="icon icons-food-11"></i></div>
                  <div class="col-sm-2"><i class="icon icons-food-12"></i></div>
                  <div class="col-sm-2"><i class="icon icons-food-13"></i></div>
                  <div class="col-sm-2"><i class="icon icons-food-14"></i></div>
                  <div class="col-sm-2"><i class="icon icons-food-15"></i></div>
                  <div class="col-sm-2"><i class="icon icons-food-16"></i></div>
                  <div class="col-sm-2"><i class="icon icons-food-17"></i></div>
                  <div class="col-sm-2"><i class="icon icons-food-18"></i></div>
                  <div class="col-sm-2"><i class="icon icons-graphic-design-01"></i></div>
                  <div class="col-sm-2"><i class="icon icons-graphic-design-02"></i></div>
                  <div class="col-sm-2"><i class="icon icons-graphic-design-03"></i></div>
                  <div class="col-sm-2"><i class="icon icons-graphic-design-04"></i></div>
                  <div class="col-sm-2"><i class="icon icons-graphic-design-05"></i></div>
                  <div class="col-sm-2"><i class="icon icons-graphic-design-06"></i></div>
                  <div class="col-sm-2"><i class="icon icons-graphic-design-07"></i></div>
                  <div class="col-sm-2"><i class="icon icons-graphic-design-08"></i></div>
                  <div class="col-sm-2"><i class="icon icons-graphic-design-09"></i></div>
                  <div class="col-sm-2"><i class="icon icons-graphic-design-10"></i></div>
                  <div class="col-sm-2"><i class="icon icons-graphic-design-11"></i></div>
                  <div class="col-sm-2"><i class="icon icons-graphic-design-12"></i></div>
                  <div class="col-sm-2"><i class="icon icons-graphic-design-13"></i></div>
                  <div class="col-sm-2"><i class="icon icons-graphic-design-14"></i></div>
                  <div class="col-sm-2"><i class="icon icons-graphic-design-15"></i></div>
                  <div class="col-sm-2"><i class="icon icons-graphic-design-16"></i></div>
                  <div class="col-sm-2"><i class="icon icons-graphic-design-17"></i></div>
                  <div class="col-sm-2"><i class="icon icons-graphic-design-18"></i></div>
                  <div class="col-sm-2"><i class="icon icons-graphic-design-19"></i></div>
                  <div class="col-sm-2"><i class="icon icons-graphic-design-20"></i></div>
                  <div class="col-sm-2"><i class="icon icons-graphic-design-21"></i></div>
                  <div class="col-sm-2"><i class="icon icons-graphic-design-22"></i></div>
                  <div class="col-sm-2"><i class="icon icons-graphic-design-23"></i></div>
                  <div class="col-sm-2"><i class="icon icons-graphic-design-24"></i></div>
                  <div class="col-sm-2"><i class="icon icons-graphic-design-25"></i></div>
                  <div class="col-sm-2"><i class="icon icons-graphic-design-26"></i></div>
                  <div class="col-sm-2"><i class="icon icons-graphic-design-27"></i></div>
                  <div class="col-sm-2"><i class="icon icons-graphic-design-28"></i></div>
                  <div class="col-sm-2"><i class="icon icons-graphic-design-29"></i></div>
                  <div class="col-sm-2"><i class="icon icons-graphic-design-30"></i></div>
                  <div class="col-sm-2"><i class="icon icons-graphic-design-31"></i></div>
                  <div class="col-sm-2"><i class="icon icons-graphic-design-32"></i></div>
                  <div class="col-sm-2"><i class="icon icons-graphic-design-33"></i></div>
                  <div class="col-sm-2"><i class="icon icons-graphic-design-34"></i></div>
                  <div class="col-sm-2"><i class="icon icons-medical-01"></i></div>
                  <div class="col-sm-2"><i class="icon icons-medical-02"></i></div>
                  <div class="col-sm-2"><i class="icon icons-medical-03"></i></div>
                  <div class="col-sm-2"><i class="icon icons-medical-04"></i></div>
                  <div class="col-sm-2"><i class="icon icons-medical-05"></i></div>
                  <div class="col-sm-2"><i class="icon icons-medical-06"></i></div>
                  <div class="col-sm-2"><i class="icon icons-medical-07"></i></div>
                  <div class="col-sm-2"><i class="icon icons-medical-08"></i></div>
                  <div class="col-sm-2"><i class="icon icons-medical-09"></i></div>
                  <div class="col-sm-2"><i class="icon icons-medical-10"></i></div>
                  <div class="col-sm-2"><i class="icon icons-medical-11"></i></div>
                  <div class="col-sm-2"><i class="icon icons-medical-12"></i></div>
                  <div class="col-sm-2"><i class="icon icons-medical-13"></i></div>
                  <div class="col-sm-2"><i class="icon icons-medical-14"></i></div>
                  <div class="col-sm-2"><i class="icon icons-medical-15"></i></div>
                  <div class="col-sm-2"><i class="icon icons-medical-16"></i></div>
                  <div class="col-sm-2"><i class="icon icons-medical-17"></i></div>
                  <div class="col-sm-2"><i class="icon icons-medical-18"></i></div>
                  <div class="col-sm-2"><i class="icon icons-medical-19"></i></div>
                  <div class="col-sm-2"><i class="icon icons-medical-20"></i></div>
                  <div class="col-sm-2"><i class="icon icons-medical-21"></i></div>
                  <div class="col-sm-2"><i class="icon icons-medical-22"></i></div>
                  <div class="col-sm-2"><i class="icon icons-medical-23"></i></div>
                  <div class="col-sm-2"><i class="icon icons-medical-24"></i></div>
                  <div class="col-sm-2"><i class="icon icons-medical-25"></i></div>
                  <div class="col-sm-2"><i class="icon icons-medical-26"></i></div>
                  <div class="col-sm-2"><i class="icon icons-medical-27"></i></div>
                  <div class="col-sm-2"><i class="icon icons-medical-28"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-01"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-02"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-03"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-04"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-05"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-06"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-07"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-08"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-09"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-10"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-11"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-12"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-13"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-14"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-15"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-16"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-17"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-18"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-19"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-20"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-21"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-22"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-23"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-24"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-25"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-26"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-27"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-28"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-29"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-30"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-31"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-32"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-33"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-34"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-35"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-36"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-37"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-38"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-39"></i></div>
                  <div class="col-sm-2"><i class="icon icons-multimedia-40"></i></div>
                  <div class="col-sm-2"><i class="icon icons-nature-01"></i></div>
                  <div class="col-sm-2"><i class="icon icons-nature-02"></i></div>
                  <div class="col-sm-2"><i class="icon icons-nature-03"></i></div>
                  <div class="col-sm-2"><i class="icon icons-nature-04"></i></div>
                  <div class="col-sm-2"><i class="icon icons-nature-05"></i></div>
                  <div class="col-sm-2"><i class="icon icons-nature-06"></i></div>
                  <div class="col-sm-2"><i class="icon icons-nature-07"></i></div>
                  <div class="col-sm-2"><i class="icon icons-nature-08"></i></div>
                  <div class="col-sm-2"><i class="icon icons-nature-09"></i></div>
                  <div class="col-sm-2"><i class="icon icons-nature-10"></i></div>
                  <div class="col-sm-2"><i class="icon icons-nature-11"></i></div>
                  <div class="col-sm-2"><i class="icon icons-nature-12"></i></div>
                  <div class="col-sm-2"><i class="icon icons-nature-13"></i></div>
                  <div class="col-sm-2"><i class="icon icons-nature-14"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-01"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-01"></i></div>
                  <div class="col-sm-2"><i class="icon icons-shopping-15"></i></div>
                  <div class="col-sm-2"><i class="icon icons-shopping-16"></i></div>
                  <div class="col-sm-2"><i class="icon icons-shopping-17"></i></div>
                  <div class="col-sm-2"><i class="icon icons-shopping-18"></i></div>
                  <div class="col-sm-2"><i class="icon icons-shopping-19"></i></div>
                  <div class="col-sm-2"><i class="icon icons-shopping-20"></i></div>
                  <div class="col-sm-2"><i class="icon icons-shopping-21"></i></div>
                  <div class="col-sm-2"><i class="icon icons-shopping-22"></i></div>
                  <div class="col-sm-2"><i class="icon icons-shopping-23"></i></div>
                  <div class="col-sm-2"><i class="icon icons-shopping-24"></i></div>
                  <div class="col-sm-2"><i class="icon icons-shopping-25"></i></div>
                  <div class="col-sm-2"><i class="icon icons-shopping-26"></i></div>
                  <div class="col-sm-2"><i class="icon icons-shopping-27"></i></div>
                  <div class="col-sm-2"><i class="icon icons-socialmedia-01"></i></div>
                  <div class="col-sm-2"><i class="icon icons-socialmedia-02"></i></div>
                  <div class="col-sm-2"><i class="icon icons-socialmedia-03"></i></div>
                  <div class="col-sm-2"><i class="icon icons-socialmedia-04"></i></div>
                  <div class="col-sm-2"><i class="icon icons-socialmedia-05"></i></div>
                  <div class="col-sm-2"><i class="icon icons-socialmedia-06"></i></div>
                  <div class="col-sm-2"><i class="icon icons-socialmedia-07"></i></div>
                  <div class="col-sm-2"><i class="icon icons-socialmedia-08"></i></div>
                  <div class="col-sm-2"><i class="icon icons-socialmedia-09"></i></div>
                  <div class="col-sm-2"><i class="icon icons-socialmedia-10"></i></div>
                  <div class="col-sm-2"><i class="icon icons-socialmedia-11"></i></div>
                  <div class="col-sm-2"><i class="icon icons-socialmedia-12"></i></div>
                  <div class="col-sm-2"><i class="icon icons-socialmedia-13"></i></div>
                  <div class="col-sm-2"><i class="icon icons-socialmedia-14"></i></div>
                  <div class="col-sm-2"><i class="icon icons-socialmedia-15"></i></div>
                  <div class="col-sm-2"><i class="icon icons-socialmedia-16"></i></div>
                  <div class="col-sm-2"><i class="icon icons-socialmedia-17"></i></div>
                  <div class="col-sm-2"><i class="icon icons-socialmedia-18"></i></div>
                  <div class="col-sm-2"><i class="icon icons-socialmedia-19"></i></div>
                  <div class="col-sm-2"><i class="icon icons-socialmedia-20"></i></div>
                  <div class="col-sm-2"><i class="icon icons-socialmedia-21"></i></div>
                  <div class="col-sm-2"><i class="icon icons-socialmedia-22"></i></div>
                  <div class="col-sm-2"><i class="icon icons-socialmedia-23"></i></div>
                  <div class="col-sm-2"><i class="icon icons-socialmedia-24"></i></div>
                  <div class="col-sm-2"><i class="icon icons-socialmedia-25"></i></div>
                  <div class="col-sm-2"><i class="icon icons-socialmedia-26"></i></div>
                  <div class="col-sm-2"><i class="icon icons-socialmedia-27"></i></div>
                  <div class="col-sm-2"><i class="icon icons-socialmedia-28"></i></div>
                  <div class="col-sm-2"><i class="icon icons-socialmedia-29"></i></div>
                  <div class="col-sm-2"><i class="icon icons-sport-01"></i></div>
                  <div class="col-sm-2"><i class="icon icons-sport-02"></i></div>
                  <div class="col-sm-2"><i class="icon icons-sport-03"></i></div>
                  <div class="col-sm-2"><i class="icon icons-sport-04"></i></div>
                  <div class="col-sm-2"><i class="icon icons-sport-05"></i></div>
                  <div class="col-sm-2"><i class="icon icons-sport-06"></i></div>
                  <div class="col-sm-2"><i class="icon icons-sport-07"></i></div>
                  <div class="col-sm-2"><i class="icon icons-sport-08"></i></div>
                  <div class="col-sm-2"><i class="icon icons-sport-09"></i></div>
                  <div class="col-sm-2"><i class="icon icons-sport-10"></i></div>
                  <div class="col-sm-2"><i class="icon icons-sport-11"></i></div>
                  <div class="col-sm-2"><i class="icon icons-sport-12"></i></div>
                  <div class="col-sm-2"><i class="icon icons-sport-13"></i></div>
                  <div class="col-sm-2"><i class="icon icons-sport-14"></i></div>
                  <div class="col-sm-2"><i class="icon icons-sport-15"></i></div>
                  <div class="col-sm-2"><i class="icon icons-sport-16"></i></div>
                  <div class="col-sm-2"><i class="icon icons-sport-17"></i></div>
                  <div class="col-sm-2"><i class="icon icons-sport-18"></i></div>
                  <div class="col-sm-2"><i class="icon icons-text-hierarchy-01"></i></div>
                  <div class="col-sm-2"><i class="icon icons-text-hierarchy-02"></i></div>
                  <div class="col-sm-2"><i class="icon icons-text-hierarchy-03"></i></div>
                  <div class="col-sm-2"><i class="icon icons-text-hierarchy-04"></i></div>
                  <div class="col-sm-2"><i class="icon icons-text-hierarchy-05"></i></div>
                  <div class="col-sm-2"><i class="icon icons-text-hierarchy-06"></i></div>
                  <div class="col-sm-2"><i class="icon icons-text-hierarchy-07"></i></div>
                  <div class="col-sm-2"><i class="icon icons-text-hierarchy-08"></i></div>
                  <div class="col-sm-2"><i class="icon icons-text-hierarchy-09"></i></div>
                  <div class="col-sm-2"><i class="icon icons-text-hierarchy-10"></i></div>
                  <div class="col-sm-2"><i class="icon icons-touch-gestures-01"></i></div>
                  <div class="col-sm-2"><i class="icon icons-touch-gestures-02"></i></div>
                  <div class="col-sm-2"><i class="icon icons-touch-gestures-03"></i></div>
                  <div class="col-sm-2"><i class="icon icons-touch-gestures-04"></i></div>
                  <div class="col-sm-2"><i class="icon icons-touch-gestures-05"></i></div>
                  <div class="col-sm-2"><i class="icon icons-touch-gestures-06"></i></div>
                  <div class="col-sm-2"><i class="icon icons-touch-gestures-07"></i></div>
                  <div class="col-sm-2"><i class="icon icons-touch-gestures-08"></i></div>
                  <div class="col-sm-2"><i class="icon icons-touch-gestures-09"></i></div>
                  <div class="col-sm-2"><i class="icon icons-touch-gestures-10"></i></div>
                  <div class="col-sm-2"><i class="icon icons-touch-gestures-11"></i></div>
                  <div class="col-sm-2"><i class="icon icons-touch-gestures-12"></i></div>
                  <div class="col-sm-2"><i class="icon icons-touch-gestures-13"></i></div>
                  <div class="col-sm-2"><i class="icon icons-touch-gestures-14"></i></div>
                  <div class="col-sm-2"><i class="icon icons-touch-gestures-15"></i></div>
                  <div class="col-sm-2"><i class="icon icons-touch-gestures-16"></i></div>
                  <div class="col-sm-2"><i class="icon icons-touch-gestures-17"></i></div>
                  <div class="col-sm-2"><i class="icon icons-touch-gestures-18"></i></div>
                  <div class="col-sm-2"><i class="icon icons-touch-gestures-19"></i></div>
                  <div class="col-sm-2"><i class="icon icons-touch-gestures-20"></i></div>
                  <div class="col-sm-2"><i class="icon icons-touch-gestures-21"></i></div>
                  <div class="col-sm-2"><i class="icon icons-touch-gestures-22"></i></div>
                  <div class="col-sm-2"><i class="icon icons-touch-gestures-23"></i></div>
                  <div class="col-sm-2"><i class="icon icons-touch-gestures-24"></i></div>
                  <div class="col-sm-2"><i class="icon icons-travel-transportation-01"></i></div>
                  <div class="col-sm-2"><i class="icon icons-travel-transportation-02"></i></div>
                  <div class="col-sm-2"><i class="icon icons-travel-transportation-03"></i></div>
                  <div class="col-sm-2"><i class="icon icons-travel-transportation-04"></i></div>
                  <div class="col-sm-2"><i class="icon icons-travel-transportation-05"></i></div>
                  <div class="col-sm-2"><i class="icon icons-travel-transportation-06"></i></div>
                  <div class="col-sm-2"><i class="icon icons-travel-transportation-07"></i></div>
                  <div class="col-sm-2"><i class="icon icons-travel-transportation-08"></i></div>
                  <div class="col-sm-2"><i class="icon icons-travel-transportation-09"></i></div>
                  <div class="col-sm-2"><i class="icon icons-travel-transportation-10"></i></div>
                  <div class="col-sm-2"><i class="icon icons-travel-transportation-11"></i></div>
                  <div class="col-sm-2"><i class="icon icons-travel-transportation-12"></i></div>
                  <div class="col-sm-2"><i class="icon icons-travel-transportation-13"></i></div>
                  <div class="col-sm-2"><i class="icon icons-travel-transportation-14"></i></div>
                  <div class="col-sm-2"><i class="icon icons-travel-transportation-15"></i></div>
                  <div class="col-sm-2"><i class="icon icons-travel-transportation-16"></i></div>
                  <div class="col-sm-2"><i class="icon icons-travel-transportation-17"></i></div>
                  <div class="col-sm-2"><i class="icon icons-travel-transportation-18"></i></div>
                  <div class="col-sm-2"><i class="icon icons-travel-transportation-19"></i></div>
                  <div class="col-sm-2"><i class="icon icons-travel-transportation-20"></i></div>
                  <div class="col-sm-2"><i class="icon icons-weather-01"></i></div>
                  <div class="col-sm-2"><i class="icon icons-weather-02"></i></div>
                  <div class="col-sm-2"><i class="icon icons-weather-03"></i></div>
                  <div class="col-sm-2"><i class="icon icons-weather-04"></i></div>
                  <div class="col-sm-2"><i class="icon icons-weather-05"></i></div>
                  <div class="col-sm-2"><i class="icon icons-weather-06"></i></div>
                  <div class="col-sm-2"><i class="icon icons-weather-07"></i></div>
                  <div class="col-sm-2"><i class="icon icons-weather-08"></i></div>
                  <div class="col-sm-2"><i class="icon icons-weather-09"></i></div>
                  <div class="col-sm-2"><i class="icon icons-weather-10"></i></div>
                  <div class="col-sm-2"><i class="icon icons-weather-11"></i></div>
                  <div class="col-sm-2"><i class="icon icons-weather-12"></i></div>
                  <div class="col-sm-2"><i class="icon icons-weather-13"></i></div>
                  <div class="col-sm-2"><i class="icon icons-weather-14"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-02"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-03"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-04"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-05"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-06"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-07"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-08"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-09"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-10"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-11"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-12"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-13"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-14"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-15"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-16"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-17"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-18"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-19"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-20"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-21"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-22"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-23"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-24"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-25"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-26"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-27"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-28"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-29"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-30"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-31"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-32"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-33"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-34"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-35"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-36"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-37"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-38"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-39"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-40"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-41"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-42"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-43"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-44"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-45"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-46"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-47"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-48"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-49"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-50"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-51"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-52"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-53"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-54"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-55"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-56"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-57"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-58"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-59"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-60"></i></div>
                  <div class="col-sm-2"><i class="icon icons-office-61"></i></div>
                  <div class="col-sm-2"><i class="icon icons-party-01"></i></div>
                  <div class="col-sm-2"><i class="icon icons-party-02"></i></div>
                  <div class="col-sm-2"><i class="icon icons-party-03"></i></div>
                  <div class="col-sm-2"><i class="icon icons-party-04"></i></div>
                  <div class="col-sm-2"><i class="icon icons-party-05"></i></div>
                  <div class="col-sm-2"><i class="icon icons-party-06"></i></div>
                  <div class="col-sm-2"><i class="icon icons-party-07"></i></div>
                  <div class="col-sm-2"><i class="icon icons-party-08"></i></div>
                  <div class="col-sm-2"><i class="icon icons-party-09"></i></div>
                  <div class="col-sm-2"><i class="icon icons-party-10"></i></div>
                  <div class="col-sm-2"><i class="icon icons-party-11"></i></div>
                  <div class="col-sm-2"><i class="icon icons-realestate-living-01"></i></div>
                  <div class="col-sm-2"><i class="icon icons-realestate-living-02"></i></div>
                  <div class="col-sm-2"><i class="icon icons-realestate-living-03"></i></div>
                  <div class="col-sm-2"><i class="icon icons-realestate-living-04"></i></div>
                  <div class="col-sm-2"><i class="icon icons-realestate-living-05"></i></div>
                  <div class="col-sm-2"><i class="icon icons-realestate-living-06"></i></div>
                  <div class="col-sm-2"><i class="icon icons-realestate-living-07"></i></div>
                  <div class="col-sm-2"><i class="icon icons-realestate-living-08"></i></div>
                  <div class="col-sm-2"><i class="icon icons-realestate-living-09"></i></div>
                  <div class="col-sm-2"><i class="icon icons-realestate-living-10"></i></div>
                  <div class="col-sm-2"><i class="icon icons-realestate-living-11"></i></div>
                  <div class="col-sm-2"><i class="icon icons-realestate-living-12"></i></div>
                  <div class="col-sm-2"><i class="icon icons-realestate-living-13"></i></div>
                  <div class="col-sm-2"><i class="icon icons-realestate-living-14"></i></div>
                  <div class="col-sm-2"><i class="icon icons-realestate-living-15"></i></div>
                  <div class="col-sm-2"><i class="icon icons-realestate-living-16"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-01"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-02"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-03"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-04"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-05"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-06"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-07"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-08"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-09"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-10"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-11"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-12"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-13"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-14"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-15"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-16"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-17"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-18"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-19"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-20"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-21"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-22"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-23"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-24"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-25"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-26"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-27"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-28"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-29"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-30"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-31"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-32"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-33"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-34"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-35"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-36"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-37"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-38"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-39"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-40"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-41"></i></div>
                  <div class="col-sm-2"><i class="icon icons-seo-icons-42"></i></div>
                  <div class="col-sm-2"><i class="icon icons-shopping-01"></i></div>
                  <div class="col-sm-2"><i class="icon icons-shopping-02"></i></div>
                  <div class="col-sm-2"><i class="icon icons-shopping-03"></i></div>
                  <div class="col-sm-2"><i class="icon icons-shopping-04"></i></div>
                  <div class="col-sm-2"><i class="icon icons-shopping-05"></i></div>
                  <div class="col-sm-2"><i class="icon icons-shopping-06"></i></div>
                  <div class="col-sm-2"><i class="icon icons-shopping-07"></i></div>
                  <div class="col-sm-2"><i class="icon icons-shopping-08"></i></div>
                  <div class="col-sm-2"><i class="icon icons-shopping-09"></i></div>
                  <div class="col-sm-2"><i class="icon icons-shopping-10"></i></div>
                  <div class="col-sm-2"><i class="icon icons-shopping-11"></i></div>
                  <div class="col-sm-2"><i class="icon icons-shopping-12"></i></div>
                  <div class="col-sm-2"><i class="icon icons-shopping-13"></i></div>
                  <div class="col-sm-2"><i class="icon icons-shopping-14"></i></div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <h3 class="m-t-40"><strong>Weather Icons</strong></h3>
                  </div>
                  <div class="col-sm-2"><i class="wi wi-umbrella"></i></div>
                  <div class="col-sm-2"><i class="wi wi-day-windy"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-alt-cloudy"></i></div>
                  <div class="col-sm-2"><i class="wi wi-up-left"></i></div>
                  <div class="col-sm-2"><i class="wi wi-down-right"></i></div>
                  <div class="col-sm-2"><i class="wi wi-day-sleet"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-sleet"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-alt-sleet"></i></div>
                  <div class="col-sm-2"><i class="wi wi-sleet"></i></div>
                  <div class="col-sm-2"><i class="wi wi-day-haze"></i></div>
                  <div class="col-sm-2"><i class="wi wi-moon-new"></i></div>
                  <div class="col-sm-2"><i class="wi wi-moon-waxing-cresent-1"></i></div>
                  <div class="col-sm-2"><i class="wi wi-moon-waxing-cresent-2"></i></div>
                  <div class="col-sm-2"><i class="wi wi-moon-waxing-cresent-3"></i></div>
                  <div class="col-sm-2"><i class="wi wi-moon-waxing-cresent-4"></i></div>
                  <div class="col-sm-2"><i class="wi wi-moon-waxing-cresent-5"></i></div>
                  <div class="col-sm-2"><i class="wi wi-moon-waxing-cresent-6"></i></div>
                  <div class="col-sm-2"><i class="wi wi-moon-first-quarter"></i></div>
                  <div class="col-sm-2"><i class="wi wi-moon-waxing-gibbous-1"></i></div>
                  <div class="col-sm-2"><i class="wi wi-moon-waxing-gibbous-2"></i></div>
                  <div class="col-sm-2"><i class="wi wi-moon-waxing-gibbous-3"></i></div>
                  <div class="col-sm-2"><i class="wi wi-moon-waxing-gibbous-4"></i></div>
                  <div class="col-sm-2"><i class="wi wi-moon-waxing-gibbous-5"></i></div>
                  <div class="col-sm-2"><i class="wi wi-moon-waxing-gibbous-6"></i></div>
                  <div class="col-sm-2"><i class="wi wi-moon-full"></i></div>
                  <div class="col-sm-2"><i class="wi wi-moon-waning-gibbous-1"></i></div>
                  <div class="col-sm-2"><i class="wi wi-moon-waning-gibbous-2"></i></div>
                  <div class="col-sm-2"><i class="wi wi-moon-waning-gibbous-3"></i></div>
                  <div class="col-sm-2"><i class="wi wi-moon-waning-gibbous-4"></i></div>
                  <div class="col-sm-2"><i class="wi wi-moon-waning-gibbous-5"></i></div>
                  <div class="col-sm-2"><i class="wi wi-moon-waning-gibbous-6"></i></div>
                  <div class="col-sm-2"><i class="wi wi-moon-3rd-quarter">    </i></div>
                  <div class="col-sm-2"><i class="wi wi-moon-waning-crescent-1"></i></div>
                  <div class="col-sm-2"><i class="wi wi-moon-waning-crescent-2"></i></div>
                  <div class="col-sm-2"><i class="wi wi-moon-waning-crescent-3"></i></div>
                  <div class="col-sm-2"><i class="wi wi-moon-waning-crescent-4"></i></div>
                  <div class="col-sm-2"><i class="wi wi-moon-waning-crescent-5"></i></div>
                  <div class="col-sm-2"><i class="wi wi-moon-waning-crescent-6"></i></div>
                  <div class="col-sm-2"><i class="wi wi-time-12"></i></div>
                  <div class="col-sm-2"><i class="wi wi-time-1"></i></div>
                  <div class="col-sm-2"><i class="wi wi-time-2"></i></div>
                  <div class="col-sm-2"><i class="wi wi-time-3"></i></div>
                  <div class="col-sm-2"><i class="wi wi-time-4"></i></div>
                  <div class="col-sm-2"><i class="wi wi-time-5"></i></div>
                  <div class="col-sm-2"><i class="wi wi-time-6"></i></div>
                  <div class="col-sm-2"><i class="wi wi-time-7"></i></div>
                  <div class="col-sm-2"><i class="wi wi-time-8"></i></div>
                  <div class="col-sm-2"><i class="wi wi-time-9"></i></div>
                  <div class="col-sm-2"><i class="wi wi-time-10"></i></div>
                  <div class="col-sm-2"><i class="wi wi-time-11"></i></div>
                  <div class="col-sm-2"><i class="wi wi-beafort-0"></i></div>
                  <div class="col-sm-2"><i class="wi wi-beafort-1"></i></div>
                  <div class="col-sm-2"><i class="wi wi-beafort-2"></i></div>
                  <div class="col-sm-2"><i class="wi wi-beafort-3"></i></div>
                  <div class="col-sm-2"><i class="wi wi-beafort-4"></i></div>
                  <div class="col-sm-2"><i class="wi wi-beafort-5"></i></div>
                  <div class="col-sm-2"><i class="wi wi-beafort-6"></i></div>
                  <div class="col-sm-2"><i class="wi wi-beafort-7"></i></div>
                  <div class="col-sm-2"><i class="wi wi-beafort-8"></i></div>
                  <div class="col-sm-2"><i class="wi wi-beafort-9"></i></div>
                  <div class="col-sm-2"><i class="wi wi-beafort-10"></i></div>
                  <div class="col-sm-2"><i class="wi wi-beafort-11"></i></div>
                  <div class="col-sm-2"><i class="wi wi-beafort-12"></i></div>
                  <div class="col-sm-2"><i class="wi wi-smoke"></i></div>
                  <div class="col-sm-2"><i class="wi wi-dust"></i></div>
                  <div class="col-sm-2"><i class="wi wi-snow-wind"></i></div>
                  <div class="col-sm-2"><i class="wi wi-day-snow-wind"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-snow-wind"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-alt-snow-wind"></i></div>
                  <div class="col-sm-2"><i class="wi wi-day-sleet-storm"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-sleet-storm"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-alt-sleet-storm"></i></div>
                  <div class="col-sm-2"><i class="wi wi-day-snow-thunderstorm"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-snow-thunderstorm"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-alt-snow-thunderstorm"></i></div>
                  <div class="col-sm-2"><i class="wi wi-solar-eclipse"></i></div>
                  <div class="col-sm-2"><i class="wi wi-lunar-eclipse"></i></div>
                  <div class="col-sm-2"><i class="wi wi-meteor"></i></div>
                  <div class="col-sm-2"><i class="wi wi-hot"></i></div>
                  <div class="col-sm-2"><i class="wi wi-hurricane"></i></div>
                  <div class="col-sm-2"><i class="wi wi-smog"></i></div>
                  <div class="col-sm-2"><i class="wi wi-alien"></i></div>
                  <div class="col-sm-2"><i class="wi wi-snowflake-cold"></i></div>
                  <div class="col-sm-2"><i class="wi wi-stars"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-partly-cloudy"></i></div>
                  <div class="col-sm-2"><i class="wi wi-day-cloudy-gusts"></i></div>
                  <div class="col-sm-2"><i class="wi wi-day-cloudy-windy"></i></div>
                  <div class="col-sm-2"><i class="wi wi-day-cloudy"></i></div>
                  <div class="col-sm-2"><i class="wi wi-day-fog"></i></div>
                  <div class="col-sm-2"><i class="wi wi-day-hail"></i></div>
                  <div class="col-sm-2"><i class="wi wi-day-lightning"></i></div>
                  <div class="col-sm-2"><i class="wi wi-day-rain-mix"></i></div>
                  <div class="col-sm-2"><i class="wi wi-day-rain-wind"></i></div>
                  <div class="col-sm-2"><i class="wi wi-day-rain"></i></div>
                  <div class="col-sm-2"><i class="wi wi-day-showers"></i></div>
                  <div class="col-sm-2"><i class="wi wi-day-snow"></i></div>
                  <div class="col-sm-2"><i class="wi wi-day-sprinkle"></i></div>
                  <div class="col-sm-2"><i class="wi wi-day-sunny-overcast"></i></div>
                  <div class="col-sm-2"><i class="wi wi-day-sunny"></i></div>
                  <div class="col-sm-2"><i class="wi wi-day-storm-showers"></i></div>
                  <div class="col-sm-2"><i class="wi wi-day-thunderstorm"></i></div>
                  <div class="col-sm-2"><i class="wi wi-cloudy-gusts"></i></div>
                  <div class="col-sm-2"><i class="wi wi-cloudy-windy"></i></div>
                  <div class="col-sm-2"><i class="wi wi-cloudy"></i></div>
                  <div class="col-sm-2"><i class="wi wi-fog"></i></div>
                  <div class="col-sm-2"><i class="wi wi-hail"></i></div>
                  <div class="col-sm-2"><i class="wi wi-lightning"></i></div>
                  <div class="col-sm-2"><i class="wi wi-rain-mix"></i></div>
                  <div class="col-sm-2"><i class="wi wi-rain-wind"></i></div>
                  <div class="col-sm-2"><i class="wi wi-rain"></i></div>
                  <div class="col-sm-2"><i class="wi wi-showers"></i></div>
                  <div class="col-sm-2"><i class="wi wi-snow"></i></div>
                  <div class="col-sm-2"><i class="wi wi-sprinkle"></i></div>
                  <div class="col-sm-2"><i class="wi wi-storm-showers"></i></div>
                  <div class="col-sm-2"><i class="wi wi-thunderstorm"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-alt-cloudy-gusts"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-alt-cloudy-windy"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-alt-hail"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-alt-lightning"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-alt-rain-mix"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-alt-rain-wind"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-alt-rain"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-alt-showers"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-alt-snow"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-alt-sprinkle"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-alt-storm-showers"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-alt-thunderstorm"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-clear"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-cloudy-gusts"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-cloudy-windy"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-cloudy"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-hail"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-lightning"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-rain-mix"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-rain-wind"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-rain"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-showers"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-snow"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-sprinkle"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-storm-showers"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-thunderstorm"></i></div>
                  <div class="col-sm-2"><i class="wi wi-celsius"></i></div>
                  <div class="col-sm-2"><i class="wi wi-cloud-down"></i></div>
                  <div class="col-sm-2"><i class="wi wi-cloud-refresh"></i></div>
                  <div class="col-sm-2"><i class="wi wi-cloud-up"></i></div>
                  <div class="col-sm-2"><i class="wi wi-cloud"></i></div>
                  <div class="col-sm-2"><i class="wi wi-degrees"></i></div>
                  <div class="col-sm-2"><i class="wi wi-down-left"></i></div>
                  <div class="col-sm-2"><i class="wi wi-down"></i></div>
                  <div class="col-sm-2"><i class="wi wi-fahrenheit"></i></div>
                  <div class="col-sm-2"><i class="wi wi-horizon-alt"></i></div>
                  <div class="col-sm-2"><i class="wi wi-horizon"></i></div>
                  <div class="col-sm-2"><i class="wi wi-left"></i></div>
                  <div class="col-sm-2"><i class="wi wi-lightning"></i></div>
                  <div class="col-sm-2"><i class="wi wi-night-fog"></i></div>
                  <div class="col-sm-2"><i class="wi wi-refresh-alt"></i></div>
                  <div class="col-sm-2"><i class="wi wi-refresh"></i></div>
                  <div class="col-sm-2"><i class="wi wi-right"></i></div>
                  <div class="col-sm-2"><i class="wi wi-sprinkles"></i></div>
                  <div class="col-sm-2"><i class="wi wi-strong-wind"></i></div>
                  <div class="col-sm-2"><i class="wi wi-sunrise"></i></div>
                  <div class="col-sm-2"><i class="wi wi-sunset"></i></div>
                  <div class="col-sm-2"><i class="wi wi-thermometer-exterior"></i></div>
                  <div class="col-sm-2"><i class="wi wi-thermometer-internal"></i></div>
                  <div class="col-sm-2"><i class="wi wi-thermometer"></i></div>
                  <div class="col-sm-2"><i class="wi wi-tornado"></i></div>
                  <div class="col-sm-2"><i class="wi wi-up-right"></i></div>
                  <div class="col-sm-2"><i class="wi wi-up"></i></div>
                  <div class="col-sm-2"><i class="wi wi-windy"></i></div>
                </div>
              </div>
              <div class="modal-footer border-top p-t-10 p-b-10 bg-gray-light">
                <button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>
                <button type="button" class="save btn btn-primary">Save</button>
              </div>
            </div>
          </div>
        </div>
        <div class="builder hidden-xs open" id="builder">
          <a class="builder-toggle"><i class="icon-wrench"></i></a>
          <div class="inner">
            <div class="builder-container">
              <h3 class="m-t-0"><strong>Pricing Tables Builder</strong></h3>
              <button class="btn btn-primary btn-block" id="add-plan">Add New Plan</button>
              <h4 class="m-t-30">Plan Layout</h4>
              <div class="layout-option">
                <span> Separated Plan</span>
                <label class="switch pull-right">
                <input data-pricing-layout="separated-plan" id="switch-separated-plan" type="checkbox" class="switch-input" checked>
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
                </label>
              </div>
              <div class="layout-option">
                <span> Button in Header</span>
                <label class="switch pull-right">
                <input data-pricing-layout="top-btn" id="switch-top-btn" type="checkbox" class="switch-input" checked>
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
                </label>
              </div>
              <div class="layout-option">
                <span> Button in Footer</span>
                <label class="switch pull-right">
                <input data-pricing-layout="bottom-btn" id="bottom-btn" type="checkbox" class="switch-input" checked>
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
                </label>
              </div>
              <div class="layout-option">
                <span> Icon</span>
                <label class="switch pull-right">
                <input data-pricing-layout="icon" id="switch-icon" type="checkbox" class="switch-input">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
                </label>
              </div>
              <div class="layout-option">
                <span> Rounded</span>
                <label class="switch pull-right">
                <input data-pricing-layout="rounded" id="switch-rounded" type="checkbox" class="switch-input">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
                </label>
              </div>
              <div class="layout-option">
                <span> Shadow</span>
                <label class="switch pull-right">
                <input data-pricing-layout="shadow" id="switch-shadow" type="checkbox" class="switch-input">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
                </label>
              </div>
              <h4>Pricing Font Size</h4>
              <div style="width:180px" class="primary p-t-30">
                <div data-slider-tooltip="always" class="pricing-font-size slide-ios" data-slider-min="20" data-slider-step="4" data-slider-max="80" data-slider-value="56"></div>
              </div>
              <h4 class="m-t-0 p-t-0">Text Font Size</h4>
              <div style="width:180px" class="primary m-b-30 p-t-30">
                <div data-slider-tooltip="always" class="text-font-size slide-ios" data-slider-min="8" data-slider-step="1" data-slider-max="20" data-slider-value="14"></div>
              </div>
           
            </div>
          </div>
        </div>
     


<!--Google Maps-->

                <div>
  <div> 
                    
                    </div>
 

    

                  </div>
                </div>
              </div>
            </div>
          </div>
         
        </div>
<style>
        .map-container{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
</style>
<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/multiselect/jquery.min.js"></script>

<!-- Select2 -->
<script src="<?php echo base_url(); ?>assets/multiselect/select2.full.min.js"></script>


<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>

        











        