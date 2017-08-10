@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
      <div class="col-lg-1">
      
                <div id="app">
					<ais-index app-id="{{ config('scout.algolia.id') }}"
					           api-key="{{ env('ALGOLIA_SEARCH') }}"
					           index-name="contacts">
					
						<ais-input placeholder="Search contacts..."><ais-input>
					
						<ais-results>
						   <template scope="{ result }">
							   <div>
								   <h1>@{{ result.name }}</h1>
								   <h4>@{{ result.company }} - @{{ result.state }}</h4>
								   <ul>
									   <li>@{{ result.email }}</li>
								   </ul>
							   </div>
						   </template>
						   <script>
						    export default {
						        mounted() {
						            console.log('Component mounted.')
						        }
						    }
						   </script>
						</ais-results>
					
					</ais-index>
                </div>
      
      </div>
    </div>
</div>
@endsection
