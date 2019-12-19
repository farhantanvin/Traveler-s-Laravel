@extends('freaks.layout')
  @section('content')
  
    <main class="app-content">

      <div class="app-title">
        <div>
          <h1>Delete Blog</h1>
        </div>
      </div>

      
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Tittle</th>
                      <th>Name(Post By)</th>
                      <th>Date</th>
                      <th>Description</th>
                      <th>Image</th>
                      <th>Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>61</td>
                      <td><img src="/abc/images/portfolio_01.jpg" height="65px" width="100px"></td>
                      <td>
                        <a href="/freaks/delete"> <button class="btn btn-lg btn-block" type="submit" >Delete</button></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

@section('title')
Delete Blog
@endsection
