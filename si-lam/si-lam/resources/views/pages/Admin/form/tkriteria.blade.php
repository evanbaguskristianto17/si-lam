@extends('layout.admin')

@section('container')

<article>
<a class="btn btn-info mb-3" href="{{route('tkriteria.create')}}">CREATE</a> 
              <!-- Table with stripped rows -->
              <table class="table datatable">
              
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Parent</th>
                    <th scope="col">Nama Child</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                
                <tbody>
                @foreach($tkriteria as $key=>$value)
                  <tr>  
                    <td>{{$value->id}}</td>
                    <td>{{$value->parent_name}}</td>
                    <td>{{$value->child_name}}</td>
                    <td><a href="{{ route('tkriteria.edit',$value->id) }}" class="btn btn-warning  btn-xs">EDIT</a></td>
                    <td>
                      <form action="{{url('tkriteria/'.$value->id)}}" method="POST">
                      @csrf
                      <input type="hidden" name="_method" value="DELETE">
                      <button class="btn btn-danger btn-xs" type="submit">DELETE</button>
                      </form>

                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
              
            </div>
          </div>
        </div>
      </div>
    </section>
</article>

@endsection