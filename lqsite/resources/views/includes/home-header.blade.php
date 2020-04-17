 <nav class="sidebar-menu shadow">

    <div class="sidebar-menu-header d-flex justify-content-between align-items-center px-3 py-4">
      <h4 class="text-white mb-0">Menu</h4>
      <a href="#" class="close">
        <svg width="15px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
            <g><g><path fill="white" d="M294.111,256.001L504.109,46.003c10.523-10.524,10.523-27.586,0-38.109c-10.524-10.524-27.587-10.524-38.11,0L256,217.892    L46.002,7.894c-10.524-10.524-27.586-10.524-38.109,0s-10.524,27.586,0,38.109l209.998,209.998L7.893,465.999    c-10.524,10.524-10.524,27.586,0,38.109c10.524,10.524,27.586,10.523,38.109,0L256,294.11l209.997,209.998    c10.524,10.524,27.587,10.523,38.11,0c10.523-10.524,10.523-27.586,0-38.109L294.111,256.001z"></path>
            </g></g>
        </svg>
      </a>
    </div>

    <div class="slimScroll pb-5">
      <ul class="sidebar-nav">
        <li class="nav-item active">
          <a class="nav-link py-3" href="http://18.188.142.12/lqsite/">Home</a>
        </li>
        <li class="nav-item nav--has-sub-menu ">
          <a class="nav-link py-3" href="#">Company</a>
          <ul class="dropdown-menu position-static py-3">
            <li class="nav-item">
              <a href="{{URL('about')}}" class="nav-link py-3">About Legitquest</a>
            </li>
            <li class="nav-item">
              <a href="{{URL('team')}}" class="nav-link py-3">Our Team</a>
            </li>
            <li class="nav-item">
              <a href="{{URL('career')}}" class="nav-link py-3">Career</a>
            </li>
            <li class="nav-item">
              <a href="{{URL('contact')}}" class="nav-link  py-2">Contact US</a>
            </li>
          </ul>
        </li>

        <li class="nav-item nav--has-sub-menu" >
          <a class="nav-link py-3" href="#">Products</a>

          <ul class="dropdown-menu position-static py-3">
            <li class="nav-item">
              <a href="{{URL('researchrequest')}}" class="nav-link py-3">Research</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link py-3">Publish</a>
            </li>
            <li class="nav-item">
              <a href="{{URL('judgment')}}" class="nav-link py-3">Top Judgement</a>
            </li>
          </ul>
        </li>

        <li class="nav-item nav--has-sub-menu" >
          <a class="nav-link py-3" href="#">Services</a>

          <ul class="dropdown-menu  position-static py-3">
            <li class="nav-item">
              <a href="{{URL('service')}}" class="nav-link py-3">Typing</a>
            </li>
            <li class="nav-item">
              <a href="{{URL('service')}}" class="nav-link py-3">Translation</a>
            </li>
            <li class="nav-item">
              <a href="{{URL('service')}}" class="nav-link py-3">Filling</a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link py-3" href="{{URL('price')}}">Pricing </a>
        </li>
      </ul>
      <hr class="my-0 mb-4">
      <ul class="navbar-nav ml-auto align-items-lg-center">
        <li class="nav-item px-3 d-flex align-items-center flex-fill">
          <a class="nav-link text-primary py-0 mr-3" href="#">Sign In</a>
          <a href="#" class="btn btn-primary btn-sm btn--has-shadow mt-3 mt-lg-0 ml-auto">Sign Up</a>
        </li>

      </ul>
    </div>


  </nav>
 <header class="header shadow">

      <nav class="navbar navbar-expand-lg  bg-white position-static navbar-sm ">
        <div class="container-fluid position-relative px-4 py-1">
          <a class="nav-link menu-icon px-2 py-1 mr-4  d-block" href="#">
            <span class="hamburger">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </span>
          </a>
          <a class="navbar-brand mr-4" href="#">
            <img class="" src="{{asset('public/upload')}}/{{Helpers::getFrontEndLogo()}}" alt="legitquest">
          </a>

          <!--   <div class="search-filed-box search-bar-sm mx-4   flex-fill">
              <div class="search-field">
                <input type="text" class="form-control border-0 search-input h-auto py-2" placeholder="Search by title, case number, issue, ...">
                <div class="form-control border-0 court-search-input  h-auto py-2">rtrt</div>
                <div class="search-btn">
                  <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                </div>
                <div class="setting-btn">
                  <a href="#"><i class="fa fa-cog" aria-hidden="true"></i></a>
                </div>
                <div class="court-dropdown-box">
                  <select id="test-select-3" class="tree-multiselect-box" multiple="multiple">
                    <option value="baz1" >Supreme Court Of India</option>
                    <option value="quux1" data-section="High Court">HCTNMDU</option>
                    <option value="quux2" data-section="High Court">HCAP</option>
                    <option value="quux3" data-section="High Court">HCA</option>
                    <option value="quux4" data-section="High Court">HCWBCAL-APP</option>
                    <option value="quux1" data-section="High Court">HCCG</option>
                    <option value="quux2" data-section="High Court">HCDL</option>
                    <option value="quux3" data-section="High Court">HCGJ</option>
                    <option value="quux4" data-section="High Court">HCHP</option>
                    <option value="quux4" data-section="High Court">HCJK</option>
                    <option value="quux4" data-section="High Court">HCJH</option>
                    <option value="quux4" data-section="High Court">HCUPAB</option>
                    <option value="quux4" data-section="High Court">HCMH</option>
                    <option value="quux4" data-section="High Court">HCWB</option>

                   <option value="quux4" data-section="High Court">HCTN</option>
                   <option value="quux4" data-section="High Court">HCBR</option>
                   <option value="quux4" data-section="High Court">HCKA</option>
                   <option value="quux4" data-section="High Court">HCKADH</option>

                   <option value="quux4" data-section="High Court">HCKAGU</option>
                   <option value="quux4" data-section="High Court">HCKAKB</option>
                   <option value="quux4" data-section="High Court">HCKL</option>
                   <option value="quux4" data-section="High Court">HCMP</option>

                   <option value="quux4" data-section="High Court">HCMPGW</option>
                   <option value="quux4" data-section="High Court">HCMPIND</option>
                   <option value="quux4" data-section="High Court">HCMN</option>
                   <option value="quux4" data-section="High Court">HCML</option>

                   <option value="quux4" data-section="High Court">HCOR</option>
                   <option value="quux4" data-section="High Court">HCPBHR</option>
                   <option value="quux4" data-section="High Court">HCRJ</option>
                   <option value="quux4" data-section="High Court">HCRJJP</option>

                   <option value="quux4" data-section="Other">HCPBHR</option>
                   <option value="quux4" data-section="Other">HCRJ</option>
                   <option value="quux4" data-section="Other">HCRJJP</option>

                  </select>
                </div>
              </div>
              <div class="cort-btn">
                <button class="btn btn-link text-white h-100 py-2">
                  <i class="fa fa-university "></i> All Courts
                </button>
              </div>

              <div class="search-helper card p-0 position-absolute text-left shadow">
                <div class="card-body">
                  <div class="exampleblock">
                    <h5 class="mb-0">Search Engine Cheat Sheet</h5>
                    <p><small>Quick examples below to get you started.</small> </p>
                  </div>

                  <div class="exampleblock first">
                    <h4 class="text-muted">Basic Search</h4>
                    <ul class="list-unstyled mb-3">
                    <li class="d-flex mb-1" data-powertip="No need to get fancy, just type what you're looking for.">
                      <div class="key">Plain English</div> <a href="#">personal injury</a></li>
                    <li class="d-flex mb-1" data-powertip="Use AND and OR to include keywords. Default is to use AND.">
                      <div class="key">Boolean</div><a href="#">(richard or dick) and cheney</a></li>
                    <li class="d-flex mb-1" data-powertip="Quotes find a specific phrase">
                      <div class="key">Phrases</div><a href="#">"patent infringement"</a></li>
                    <li class="d-flex mb-1" data-powertip="When you use a hyphen, we search: the two word parts separately, the hyphenated word, and the two word parts joined as a single word.">
                      <div class="key">Hyphenate</div><a href="#">anti-inflammatory</a></li>
                    </ul>
                </div>

                <div class="exampleblock second">
                    <h4 class="text-muted">Filters</h4>
                    <ul class="list-unstyled mb-3">

                    <li class="d-flex mb-1" data-powertip="We support over a dozen search filters. Read the documentation link below to learn more.">
                      <div class="key">By Judge</div><a href="#">judge:Posner</a></li>
                    <li class="d-flex mb-1" data-powertip="We support over a dozen search filters. Read the documentation link below to learn more.">
                      <div class="key">Opinions</div><a href="#">is:opinion</a></li>

                    <li class="d-flex mb-1" data-powertip="We support over a dozen search filters. Read the documentation link below to learn more.">
                      <div class="key">By Party</div><a href="#">party:panasonic</a></li>
                    <li class="d-flex mb-1" data-powertip="We support over a dozen search filters. Read the documentation link below to learn more.">
                      <div class="key">By Date</div><a href="#">from:1/20/2012 to:2015</a></li>
                    </ul>
                </div>

                <div class="exampleblock third">
                  <h4 class="text-muted">Advanced</h4>
                  <ul class="list-unstyled mb-3">
                  <li class="d-flex mb-1" data-powertip="Match the beginning of a word with an exclamation mark.">
                    <div class="key">Word Endings</div><a href="#">personal injur!</a></li>
                  <li class="d-flex mb-1" data-powertip="Find cases with specific money amounts simply by specifying the amount range. Specify exact dollars ($1250-4200) or use abbreviations ($100k-1B).">
                    <div class="key">Dollar Amount</div><a href="#">verdict $100k-$5M</a></li>
                  <li class="d-flex mb-1" data-powertip="The &quot;w/&quot; search operator (which stands for &quot;within&quot;) helps find nearby words. The example query finds documents with the word &quot;claim&quot; within 3 words of the word &quot;construction&quot;.">
                    <div class="key">Nearby Words</div><a href="#">claim w/3 construction</a></li>
                  <li class="d-flex mb-1" data-powertip="Easily combine queries together using the within operator, &quot;and&quot;, and &quot;or&quot;.">
                    <div class="key">Combinations</div><a href="#">(grant or deny) w/4 copyright</a></li>
                  </ul>
              </div>

              <hr>
              <div class="text-center">
                <a href="#" class="d-block"> <strong>Full Search Documentation</strong> </a>
                <small>Learn all of our search options.</small>
              </div>
                </div>

              </div>

              <div class="query_builder card p-0 position-absolute text-left shadow">
                <div class="card-body">
                  <div class="d-flex mb-4">
                    <h5 class="mb-0">Search Query Builder</h5>
                    <div class="close_btn ml-auto"><a href="#">✖</a></div>
                  </div>

                  <div class="form-group mb-2 d-flex align-items-center">
                      <label class="mr-2 mb-0">All of these words</label>
                      <div class="flex-fill">
                        <input type="text" class="form-control p-1 h-auto">
                      </div>
                    </div>

                    <div class="form-group mb-2 d-flex align-items-center">
                      <label class="mr-2 mb-0">Any of these words</label>
                      <div class="flex-fill">
                        <input type="text" class="form-control p-1 h-auto">
                      </div>
                    </div>

                    <div class="form-group mb-2 d-flex align-items-center">
                      <label class="mr-2 mb-0">Exactly this phrase</label>
                      <div class="flex-fill">
                        <input type="text" class="form-control p-1 h-auto">
                      </div>
                    </div>

                    <div class="form-group mb-2 d-flex align-items-center">
                      <label class="mr-2 mb-0">None of these words</label>
                      <div class="flex-fill">
                        <input type="text" class="form-control p-1 h-auto">
                      </div>
                    </div>

                    <div class="form-group mb-2 d-flex align-items-center">
                      <label class="mr-2 mb-0">This word</label>
                      <div class="row">
                        <div class="col-md-4">
                          <input type="text" class="form-control p-1 h-auto">
                        </div>
                        <div class="col-md-4">
                            <select class="form-control p-1 h-auto">
                              <option value="w/2">within 2 words of</option>
                              <option value="w/5">within 5 words of</option>
                              <option value="w/15">within 15 words of</option>
                              <option value="w/50">within 50 words of</option>
                              <option value="t/2">followed, within 2 words, by</option>
                              <option value="t/10">followed, within 10 words, by</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                          <input type="text" class="form-control p-1 h-auto ">
                        </div>
                      </div>
                    </div>

                    <div class="form-group mb-2 d-flex align-items-center">
                      <label class="mr-2 mb-0">Filter by</label>
                      <div class="row flex-fill">
                        <div class="col-md-6">
                          <select class="form-control p-1 h-auto">
                            <option value="judge">Judge</option>
                            <option value="attorney">Attorney</option>
                            <option value="court">Court</option>
                            <option value="docket">Docket</option>
                            <option value="firm">Firm</option>
                                  <option value="nos">Nature of Suit</option>
                            <option value="type">Case Type</option>
                                  <option value="status">Status</option>
                            <option value="outcome">Outcome</option>
                            <option value="party">Party</option>
                            <option value="title">Title</option>
                            <option value="mark">Trademark</option>
                                  <option value="documenttitle">Document Title</option>
                            <option value="from">Start Date</option>
                            <option value="to">End Date</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control p-1 h-auto ">
                        </div>
                      </div>
                    </div>

                    <div class="form-group mb-2 d-flex align-items-center">
                      <label class="mr-2 mb-0">Filter by</label>
                      <div class="row flex-fill">
                        <div class="col-md-6">
                          <select class="form-control p-1 h-auto">
                            <option value="type">Case Type</option>
                            <option value="attorney">Attorney</option>
                            <option value="court">Court</option>
                            <option value="docket">Docket</option>
                            <option value="firm">Firm</option>
                            <option value="judge">Judge</option>
                                  <option value="nos">Nature of Suit</option>
                                  <option value="status">Status</option>
                            <option value="outcome">Outcome</option>
                            <option value="party">Party</option>
                            <option value="title">Title</option>
                            <option value="mark">Trademark</option>
                                  <option value="documenttitle">Document Title</option>
                            <option value="from">Start Date</option>
                            <option value="to">End Date</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control p-1 h-auto ">
                        </div>
                      </div>
                    </div>

                    <div class="form-group mb-2 d-flex align-items-center">
                      <label class="mr-2 mb-0">Party’s name</label>
                      <div class="flex-fill">
                        <input type="text" class="form-control p-1 h-auto">
                      </div>
                    </div>

                    <div class="form-group mb-2 d-flex align-items-center">
                      <label class="mr-2 mb-0">Has at least</label>
                      <div class="flex-fill">
                        <select class="form-control p-1 h-auto">
                          <option value=""></option>
                          <option value="num_party:[10,]">10 Parties</option>
                          <option value="num_party:[50,]">50 Parties</option>
                          <option value="num_attorney:[10,]">10 Attorneys on the Case</option>
                          <option value="num_attorney:[50,]">50 Attorneys on the Case</option>
                          <option value="party:(firm:(num_female:[1,]))">1 Female Attorney</option>
                          <option value="party:(firm:(num_female:[1,])) and not party:(firm:(num_male:[1,]))">Only Female Attorneys</option>
                          <option value="party:(firm:(num_male:[1,])) and not party:(firm:(num_female:[1,]))">Only Male Attorneys</option>
                          <option value="num_pages:[10,]">10 Pages (documents only)</option>
                          <option value="num_pages:[50,]">50 Pages (documents only)</option>
                      </select>
                      </div>
                    </div>

                    <div class="form-group mb-2 d-flex align-items-center">
                      <label class="mr-2 mb-0">Filed</label>
                      <div class="flex-fill">
                        <select class="form-control p-1 h-auto">
                            <option value=""></option>
                            <option value="last:7days">In the last 7 days</option>
                            <option value="last:30days">In the last 30 days</option>
                            <option value="from:2020">This year</option>
                            <option value="last:1year">In the last year</option>
                            <option value="last:5years">In the last 5 years</option>
                      </select>
                      </div>
                    </div>

                    <button type="button" class="btn btn-primary btn-block btn-sm">
                      Search
                    </button>

                </div>
              </div>

            </div> -->
          <div class="search-filed-box lq-search bg-white  d-flex align-items-center search-bar-sm   flex-fill">

            <div class="position-relative flex-fill search-controls-containers">
              <div id="free-text-box" class="search-field flex-fill show">
                <input id="basics" class="form-control search-input" placeholder="Search by title, case number, issue, ..." >
                <div class="search-dropdown p-3">
                  <ul class="list-unstyled" >
                      <li class="search-help-section-header text-muted">
                          <div  class=""><small class="text-uppercase">Search techniques</small></div>
                      </li>
                      <li class="mb-2"><a class="row">
                        <strong class="col-2 col-tag">(+)</strong>
                        <small class="col-10 col-desc">
                          <span  >Find documents containing all connected terms</span>
                          <em  class="detail">personal + injury</em>
                        </small></a>
                      </li>
                      <li class="mb-2"><a class="row">
                        <strong class="col-2 col-tag">(-)</strong>
                        <small class="col-10 col-desc">
                          <span  >Excludes documents</span>
                          <em  class="detail">personal - injury
                            <small>finds documents with the word “personal” without  “injury”</small>
                          </em>
                        </small></a>
                      </li>
                      <li class="mb-2"><a class="row">
                        <strong class="col-2 col-tag">w/#</strong>
                        <small class="col-10 col-desc">
                          <span >Find documents which have terms within a given proximity of each other.</span>
                          <em  class="detail">personal w/5 injury
                          <small>finds documents with “personal” within five words of “injury”</small>

                          </em>
                        </small>
                      </a></li>
                      <li class="mb-2"><a class="row">
                        <strong class="col-2 col-tag">!</strong>
                        <small class="col-10 col-desc">
                          <span  >Stemming finds all words containing the root word</span>
                          <em  class="detail">juris!
                          <small>finds documents containing “jurisdiction”, “jurisprudence”, “juristic”, etc.</small>

                          </em>
                        </small>
                      </a></li>
                      <li class="mb-2"><a class="row">
                        <strong class="col-2 col-tag">*</strong>
                        <small class="col-10 col-desc">
                          <span  >Find similar words with variations on single characters</span>
                          <em  class="detail">wom*n
                          <small>find documents containing either “woman” or “women”</small>

                          </em>
                        </small></a></li>

                      <li class="mb-2"><a class="row">
                        <strong class="col-2 col-tag">Filter Within</strong>
                        <small class="col-10 col-desc">
                          <span  >Any number of filter within the result</span>
                          <em class="detail"></em>
                        </small></a></li>
                      <li class="mb-2"><a class="row">
                        <strong class="col-2 col-tag">" "</strong>
                        <small class="col-10 col-desc">
                          <span  >Quote for the same phrase search</span>
                          <em class="detail">"stop payment"; "non compliance of mandatory provisions"</em>
                        </small></a></li>
                      </ul>
                </div>
              </div>
              <div id="citation-box" class="search-field flex-fill">
                <input class="form-control journal-input search-input" placeholder="Search through Citation">
                <div class="search-dropdown p-3">

                    <div class="citation-list-container">
                      <h4 class="text-center">Please enter your Citation in this format </h4>
                      <div class="row">
                        <div class="col-md-3 col-sm-6">
                          <div class="citation-list">
                            <ul class="list-unstyled">
                              <li>
                                <strong>Supreme Court</strong>
                              </li>
                              <li>
                              <span>AIR 1950 SC 1</span>
                              </li>
                              <li>
                              <span>[1950 ] 1 SCR 64</span>
                              </li><li>
                              <span>JT 1986 (1) SC 178</span>
                              </li>
                              <li>
                              <span>1981 (3) SCALE 1831</span>
                              </li>
                              <li>
                              <span>(1970 ) 3 SCC 368</span>
                              </li>
                            </ul>
                          </div>
                          <div class="citation-list">
                            <ul class="list-unstyled">
                              <li>
                                <strong>Patna</strong>
                              </li>
                              <li>
                              <span>AIR 2000 Pat 331</span>
                              </li>
                              <li>
                              <span>2000 (3) BLJR 2184</span>
                              </li><li>
                              <span>2000 (3)PLJR 241</span>
                              </li>

                            </ul>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                          <div class="citation-list">
                            <ul class="list-unstyled">
                              <li>
                                <strong>Delhi</strong>
                              </li>
                              <li>
                              <span>1993 IVAD (Delhi ) 838</span>
                              </li>
                              <li>
                              <span>AIR 1967 Delhi 65</span>
                              </li><li>
                              <span>3(1967 ) DLT 299</span>
                              </li>
                              <li>
                              <span>1981 (2) DRJ 184</span>
                              </li>
                            </ul>
                          </div>
                          <div class="citation-list">
                            <ul class="list-unstyled">
                              <li>
                                <strong>Punjab & Haryana</strong>
                              </li>
                              <li>
                              <span>AIR 2014 P&H 139</span>
                              </li>
                              <li>
                              <span>56 PLR 12 (1954 )</span>
                              </li>

                            </ul>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                          <div class="citation-list">
                            <ul class="list-unstyled">
                              <li>
                                <strong>Maharashtra</strong>
                              </li>
                              <li>
                              <span>1997 (3) ALLMR 688</span>
                              </li>
                              <li>
                              <span>AIR 1950 Bom 378</span>
                              </li><li>
                              <span>1982 (1) BomCR 236</span>
                              </li>
                              <li>
                              <span>1981 (2) DRJ 184</span>
                              </li>
                              <li>
                              <span>1963 MhLJ 503</span>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                          <div class="citation-list">
                            <ul class="list-unstyled">
                              <li>
                                <strong>Calcutta</strong>
                              </li>
                              <li>
                              <span>AIR 1950 Cal 573</span>
                              </li>
                              <li>
                              <span>(1950 ) 1 CALLT 341 (HC )</span>
                              </li><li>
                              <span>2010 (1) CHN 237</span>
                              </li>
                              <li>
                              <span>1971 (1) CLJ 314</span>
                              </li>
                              <li>
                              <span>54 CWN 189</span>
                              </li>
                              <li>
                              <span>(1952) ILR 2 Cal 352</span>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
              <div id="judge-box" class="search-field flex-fill">
                <input class="form-control search-input" placeholder="Judge name">
              </div>
              <div id="party-box" class="search-field flex-fill">
                <input class="form-control search-input" placeholder="petitioner/respondent">
              </div>
              <div id="act-box" class="search-field flex-fill">
                <input class="form-control search-input" placeholder="Act Name">
                <input class="form-control section-input search-input" placeholder="Section">
              </div>
              <div id="act-search-box" class="search-field flex-fill">
                <input class="form-control search-input" placeholder="Search bare Act">
              </div>
              <div class="search-btn">
                <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
              </div>
            </div>
            <div class="search-select">
              <button class="btn btn-primary select-btn px-3 " data-toggle="collapse" href="#select-dropdown" role="button" aria-expanded="false" aria-controls="select-dropdown">
                All
              </button>
              <div class="collapse" id="select-dropdown">
                <div class="card card-body p-3">
                  <div class="select-block mb-4">
                    <strong class="d-block mb-2">Case Law</strong>
                    <ul class="m-0 p-0 list-unstyled">
                      <li class="mb-1">
                        <div class="select-radio">
                          <div class="select-radio-inner">
                            <span>Free text search</span>
                            <label class="mb-0">
                              <input class="d-none" type="radio" name="search-radio" value="free-text-box" checked>
                              <span>All</span>
                            </label>
                          </div>

                        </div>
                      </li>
                      <li class="mb-1">
                        <div class="select-radio">
                          <div class="select-radio-inner">
                            <span>Name-Year-Vol-Page</span>
                            <label class="mb-0">
                              <input  class="d-none" type="radio" name="search-radio" value="citation-box">
                              <span>Citation</span>
                            </label>
                          </div>

                        </div>
                      </li>
                      <li class="mb-1">
                        <div class="select-radio">
                          <div class="select-radio-inner">
                              <span>Last name – first name</span>
                              <label class="mb-0">
                                <input class="d-none" type="radio" name="search-radio" value="judge-box">
                                <span>Judge Name</span>
                              </label>
                          </div>
                        </div>
                      </li>
                      <li class="mb-1">
                        <div class="select-radio">
                          <div class="select-radio-inner">
                            <span>Petitioner - respondent</span>
                            <label class="mb-0">
                              <input class="d-none" type="radio" name="search-radio" value="party-box">
                              <span>Party Name</span>
                            </label>
                          </div>
                        </div>
                      </li>
                      <li class="mb-1">
                        <div class="select-radio">
                          <div class="select-radio-inner">
                            <span>Act name- Section</span>
                            <label class="mb-0">
                              <input class="d-none" type="radio" name="search-radio" value="act-box">
                              <span>Act Name</span>
                            </label>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>

                  <div class="select-block">
                    <strong class="d-block mb-2">Bare Act Search</strong>
                    <ul class="m-0 p-0 list-unstyled">
                      <li>
                        <div class="select-radio">
                          <div class="select-radio-inner">
                            <span>Search bare Act</span>
                            <label>
                              <input class="d-none" type="radio" name="search-radio" value="act-search-box">
                              <span>Act Name</span>
                            </label>
                          </div>

                        </div>
                      </li>
                    </ul>
                  </div>
                </div>

              </div>
            </div>

          </div>   
          <div class="ml-auto d-none d-lg-block" id="navbarsExampleDefault">
            <ul class="navbar-nav">
              <li class="nav-item nav--has-sub-menu" data-toggle="hover">
                <a class="nav-link" href="#" data-toggle="dropdown">
                <img src="{{asset('public/images/team/ambikaprasad.jpg')}}" class="rounded-circle mr-3" width="25">Ambika Prasad
                </a>

                <ul class="nav-sub-menu dropdown-menu rounded-lg shadow dropdown-menu-right">
                  <li class="nav-item">
                    <a href="#" class="nav-link">Profile</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{URL('bookmark')}}" class="nav-link">My Bookmarks</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{URL('notes')}}" class="nav-link">My Notes</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">Logout</a>
                  </li>
                </ul>
              </li>



            </ul>
          </div>




        </div>
      </nav> <!-- END Navbar -->

    </header>