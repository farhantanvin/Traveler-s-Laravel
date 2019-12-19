@extends('freaks.layout')
  @section('content')
  
    <main class="app-content">

      <div class="app-title">
        <div>
          <h1>Edit Blog</h1>
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
                      <th>Location</th>
                      <th>Post Date</th>
                      <th>Image</th>
                      <th>Edit</th>
                      <th>Delete Blog</th>
                    </tr>
                  </thead>
                   
                
                      
                  <tbody>    
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><img  src="" height="65px" width="100px"></td>
                      <td>
                        <a href="/freaks/edit/"> <button class="btn btn-lg btn-block" type="submit">Edit</button></a>
                          
                      </td>
                          
                      <td>
                        <a href="/freaks/delete/"> <button class="btn btn-lg btn-block" type="submit" >Delete</button></a>
                      </td>
                        
                    </tr>
                      
                  </tbody>

                </table>
                 
                  
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

@endsection

@section('title')
Edit Blog
@endsection