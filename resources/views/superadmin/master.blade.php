@extends('dashboard')

@section('superadmin.master')

        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Projek</h4>
                  </div>
                  <div class="card-body">
                  {{ $projectsCount }}
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </section>

@endsection            
