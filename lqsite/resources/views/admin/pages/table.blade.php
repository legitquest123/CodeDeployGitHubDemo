@extends('admin.layouts.layout')
@section('content')
  

      <div class="content-wrapper">
        <div class="content">						 
                <div class="row">
                <div class="col-lg-6">
                  <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                      <h2>Basic Table</h2>
                    </div>
                    <div class="card-body">
                      <p class="mb-5">Documentation and examples for opt-in styling of tables (given their prevalent use in JavaScript plugins) with Bootstrap <a href="http://getbootstrap.com/docs/4.1/content/tables/"
                         target="_blank"> more details.</a></p>
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td scope="row">1</td>
                            <td>Lucia</td>
                            <td>Christ</td>
                            <td>@Lucia</td>
                          </tr>
                          <tr>
                            <td scope="row">2</td>
                            <td>Catrin</td>
                            <td>Seidl</td>
                            <td>@catrin</td>
                          </tr>
                          <tr>
                            <td scope="row">3</td>
                            <td>Lilli</td>
                            <td>Kirsh</td>
                            <td>@lilli</td>
                          </tr>
                          <tr>
                            <td scope="row">4</td>
                            <td>Else</td>
                            <td>Voigt</td>
                            <td>@voigt</td>
                          </tr>
                          <tr>
                            <td scope="row">5</td>
                            <td>Ursel</td>
                            <td>Harms</td>
                            <td>@ursel</td>
                          </tr>
                          <tr>
                            <td scope="row">6</td>
                            <td>Anke</td>
                            <td>Sauter</td>
                            <td>@Anke</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                      <h2>Striped Table</h2>
                    </div>
                    <div class="card-body">
                      <p class="mb-5">Use <code>.table-striped</code> to add zebra-striping to any table row within the &lt;tbody&gt;. Read bootstrap documentation for <a href="http://getbootstrap.com/docs/4.1/content/tables/#striped-rows" target="_blank"> more details.</a></p>
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td scope="row">1</td>
                            <td>Lucia</td>
                            <td>Christ</td>
                            <td>@Lucia</td>
                          </tr>
                          <tr>
                            <td scope="row">2</td>
                            <td>Catrin</td>
                            <td>Seidl</td>
                            <td>@catrin</td>
                          </tr>
                          <tr>
                            <td scope="row">3</td>
                            <td>Lilli</td>
                            <td>Kirsh</td>
                            <td>@lilli</td>
                          </tr>
                          <tr>
                            <td scope="row">4</td>
                            <td>Else</td>
                            <td>Voigt</td>
                            <td>@voigt</td>
                          </tr>
                          <tr>
                            <td scope="row">5</td>
                            <td>Ursel</td>
                            <td>Harms</td>
                            <td>@ursel</td>
                          </tr>
                          <tr>
                            <td scope="row">6</td>
                            <td>Anke</td>
                            <td>Sauter</td>
                            <td>@Anke</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                </div>
                <div class="col-lg-6">
                  <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                      <h2>Bordered Table</h2>
                    </div>
                    <div class="card-body">
                      <p class="mb-5">Add <code>.table-bordered</code> for borders on all sides of the table and cells. Read bootstrap documentation for <a href="http://getbootstrap.com/docs/4.1/content/tables/#bordered-table" target="_blank"> more details.</a></p>
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td scope="row">6</td>
                            <td>Anke</td>
                            <td>Sauter</td>
                            <td>@Anke</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                      <h2>Contextual Table</h2>
                    </div>
                    <div class="card-body">
                      <p class="mb-5">Use contextual classes to color table rows or individual cells. Read bootstrap documentation for <a href="http://getbootstrap.com/docs/4.1/content/tables/#contextual-classes" target="_blank"> more details.</a></p>
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="table-secondary">
                            <td scope="row">1</td>
                            <td>Lucia</td>
                            <td>Christ</td>
                            <td>@Lucia</td>
                          </tr>
                          <tr class="table-primary">
                            <td scope="row">2</td>
                            <td>Catrin</td>
                            <td>Seidl</td>
                            <td>@catrin</td>
                          </tr>
                          <tr class="table-info">
                            <td scope="row">3</td>
                            <td>Lilli</td>
                            <td>Kirsh</td>
                            <td>@lilli</td>
                          </tr>
                          <tr class="table-success">
                            <td scope="row">4</td>
                            <td>Else</td>
                            <td>Voigt</td>
                            <td>@voigt</td>
                          </tr>
                          <tr class="table-danger">
                            <td scope="row">5</td>
                            <td>Ursel</td>
                            <td>Harms</td>
                            <td>@ursel</td>
                          </tr>
                          <tr class="table-warning">
                            <td scope="row">6</td>
                            <td>Anke</td>
                            <td>Sauter</td>
                            <td>@Anke</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                </div>
                <div class="col-lg-6">
                  <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                      <h2>Dark Table</h2>
                    </div>
                    <div class="card-body">
                      <p class="mb-5"> You can also invert the colors—with light text on dark backgrounds—with <code>.table-dark</code>. Read bootstrap documentation for <a href="http://getbootstrap.com/docs/4.1/content/tables/#table-head-options" target="_blank"> more details.</a></p>
                      <table class="table table-dark">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td scope="row">1</td>
                            <td>Lucia</td>
                            <td>Christ</td>
                            <td>@Lucia</td>
                          </tr>
                          <tr>
                            <td scope="row">2</td>
                            <td>Catrin</td>
                            <td>Seidl</td>
                            <td>@catrin</td>
                          </tr>
                          <tr>
                            <td scope="row">3</td>
                            <td>Lilli</td>
                            <td>Kirsh</td>
                            <td>@lilli</td>
                          </tr>
                          <tr>
                            <td scope="row">4</td>
                            <td>Else</td>
                            <td>Voigt</td>
                            <td>@voigt</td>
                          </tr>
                          <tr>
                            <td scope="row">5</td>
                            <td>Ursel</td>
                            <td>Harms</td>
                            <td>@ursel</td>
                          </tr>
                          <tr>
                            <td scope="row">6</td>
                            <td>Anke</td>
                            <td>Sauter</td>
                            <td>@Anke</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                      <h2>Table head options</h2>
                    </div>
                    <div class="card-body">
                      <p class="mb-5">Similar to tables and dark tables, use the modifier classes <code>.thead-light</code> or <code>.thead-dark</code> to make &lt;thead&gt;s appear light or dark gray. Read bootstrap documentation for <a href="http://getbootstrap.com/docs/4.1/content/tables/#table-head-options" target="_blank"> more details.</a></p>
                      <table class="table table-hover ">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td scope="row">1</td>
                            <td>Lucia</td>
                            <td>Christ</td>
                            <td>@Lucia</td>
                          </tr>
                          <tr>
                            <td scope="row">2</td>
                            <td>Catrin</td>
                            <td>Seidl</td>
                            <td>@catrin</td>
                          </tr>
                          <tr>
                            <td scope="row">3</td>
                            <td>Lilli</td>
                            <td>Kirsh</td>
                            <td>@lilli</td>
                          </tr>
                          <tr>
                            <td scope="row">4</td>
                            <td>Else</td>
                            <td>Voigt</td>
                            <td>@voigt</td>
                          </tr>
                          <tr>
                            <td scope="row">5</td>
                            <td>Ursel</td>
                            <td>Harms</td>
                            <td>@ursel</td>
                          </tr>
                          <tr>
                            <td scope="row">6</td>
                            <td>Anke</td>
                            <td>Sauter</td>
                            <td>@Anke</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              </div>


      </div>

@endsection