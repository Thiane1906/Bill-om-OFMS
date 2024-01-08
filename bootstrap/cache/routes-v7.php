<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::69BLlEepIrAQK29s',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/catalogue_by_sim_head' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XJP2XMF8mHkCX8tr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::z33nibL0Nk0ih2Tn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XfwAP4XFzUz4tDop',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::45s2T9mVOX7S8tJn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KuLactl2kNA3lUVN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9tB4yLVe1EqeKbZy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U3XkGVcbFvyCtsha',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/catalogue' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'catalogue.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'catalogue.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/catalogue/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'catalogue.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/permissions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permissions.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'permissions.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/permissions/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permissions.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'users.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'roles.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/roles/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/structures' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'structures.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'structures.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/structures/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'structures.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/interim' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'interim.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'interim.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/interim/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'interim.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/update-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.user.status',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/trackings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'trackings.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'trackings.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/trackings/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'trackings.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/aggregateur' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'aggregateur.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'aggregateur.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/aggregateur/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'aggregateur.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partenaires' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'partenaires_dormants.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/facturation_envalidation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'facturation_envalidation.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'facturation_envalidation.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/facturation_envalidation/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'facturation_envalidation.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/facturation_valide' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'facturation_valide.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'facturation_valide.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/facturation_valide/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'facturation_valide.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/facturation_rejetee' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'facturation_rejetee.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'facturation_rejetee.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/facturation_rejetee/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'facturation_rejetee.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/recyclage_uv' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'recyclage_uv.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'recyclage_uv.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/recyclage_uv/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'recyclage_uv.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/hors_catalogue' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hors_catalogue.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'hors_catalogue.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/hors_catalogue/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hors_catalogue.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/transactionv3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transactionv3.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'transactionv3.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/transactionv3/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transactionv3.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/recap_monthly' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'recap_monthly.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'recap_monthly.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/recap_monthly/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'recap_monthly.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/recap_weekly' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'recap_weekly.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'recap_weekly.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/recap_weekly/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'recap_weekly.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/catalogue_international' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'catalogue_international.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'catalogue_international.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/catalogue_international/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'catalogue_international.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/download_file_action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IspADjvtXVKAirMv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/download_zip_file_action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N5l6wQnTvGtEOClE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/p(?|assword/reset/([^/]++)(*:34)|ermissions/([^/]++)(?|(*:63)|/edit(*:75)|(*:82)))|/catalogue(?|/([^/]++)(?|(*:116)|/edit(*:129)|(*:137))|_international/(?|([^/]++)(?|(*:175)|/edit(*:188)|(*:196))|delete(*:211)))|/dashboard/([^/]++)(?|(*:243)|/edit(*:256)|(*:264))|/users/([^/]++)(?|(*:291)|/edit(*:304)|(*:312))|/r(?|oles/([^/]++)(?|(*:342)|/edit(*:355)|(*:363))|ec(?|yclage_uv/(?|([^/]++)(?|(*:401)|/edit(*:414)|(*:422))|search(*:437))|ap_(?|monthly/([^/]++)(?|(*:471)|/edit(*:484)|(*:492))|weekly/([^/]++)(?|(*:519)|/edit(*:532)|(*:540)))))|/structures/([^/]++)(?|(*:575)|/edit(*:588)|(*:596))|/interim/([^/]++)(?|(*:625)|/edit(*:638)|(*:646))|/tra(?|ckings/([^/]++)(?|(*:680)|/edit(*:693)|(*:701))|nsaction(?|s/([^/]++)(*:731)|v3/([^/]++)(?|(*:753)|/edit(*:766)|(*:774))))|/aggregateur/(?|([^/]++)(?|(*:812)|/edit(*:825)|(*:833))|edit/([^/]++)(*:855))|/facturation_(?|envalidation/(?|([^/]++)(?|(*:907)|/edit(*:920)|(*:928))|search(*:943)|rejet(*:956))|valide/(?|([^/]++)(?|(*:986)|/edit(*:999)|(*:1007))|search(*:1023)|export_pdf(*:1042))|rejetee/(?|([^/]++)(?|(*:1074)|/edit(*:1088)|(*:1097))|search(*:1113)))|/hors_catalogue/([^/]++)(?|(*:1151)|/edit(*:1165)|(*:1174))|/([^/]++)/([^/]++)(?|(*:1205)|/([^/]++)(*:1223)))/?$}sDu',
    ),
    3 => 
    array (
      34 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      63 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permissions.show',
          ),
          1 => 
          array (
            0 => 'permission',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      75 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permissions.edit',
          ),
          1 => 
          array (
            0 => 'permission',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      82 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permissions.update',
          ),
          1 => 
          array (
            0 => 'permission',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'permissions.destroy',
          ),
          1 => 
          array (
            0 => 'permission',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      116 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'catalogue.show',
          ),
          1 => 
          array (
            0 => 'catalogue',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      129 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'catalogue.edit',
          ),
          1 => 
          array (
            0 => 'catalogue',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      137 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'catalogue.update',
          ),
          1 => 
          array (
            0 => 'catalogue',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'catalogue.destroy',
          ),
          1 => 
          array (
            0 => 'catalogue',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      175 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'catalogue_international.show',
          ),
          1 => 
          array (
            0 => 'catalogue_international',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      188 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'catalogue_international.edit',
          ),
          1 => 
          array (
            0 => 'catalogue_international',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      196 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'catalogue_international.update',
          ),
          1 => 
          array (
            0 => 'catalogue_international',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'catalogue_international.destroy',
          ),
          1 => 
          array (
            0 => 'catalogue_international',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      211 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'catalogue_international.delete',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      243 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.show',
          ),
          1 => 
          array (
            0 => 'dashboard',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      256 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.edit',
          ),
          1 => 
          array (
            0 => 'dashboard',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      264 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.update',
          ),
          1 => 
          array (
            0 => 'dashboard',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.destroy',
          ),
          1 => 
          array (
            0 => 'dashboard',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      291 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.show',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      304 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.edit',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      312 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'users.destroy',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      342 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.show',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      355 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.edit',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      363 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.update',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'roles.destroy',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      401 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'recyclage_uv.show',
          ),
          1 => 
          array (
            0 => 'recyclage_uv',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      414 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'recyclage_uv.edit',
          ),
          1 => 
          array (
            0 => 'recyclage_uv',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      422 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'recyclage_uv.update',
          ),
          1 => 
          array (
            0 => 'recyclage_uv',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'recyclage_uv.destroy',
          ),
          1 => 
          array (
            0 => 'recyclage_uv',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      437 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'recyclage_uv.search',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      471 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'recap_monthly.show',
          ),
          1 => 
          array (
            0 => 'recap_monthly',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      484 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'recap_monthly.edit',
          ),
          1 => 
          array (
            0 => 'recap_monthly',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      492 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'recap_monthly.update',
          ),
          1 => 
          array (
            0 => 'recap_monthly',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'recap_monthly.destroy',
          ),
          1 => 
          array (
            0 => 'recap_monthly',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      519 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'recap_weekly.show',
          ),
          1 => 
          array (
            0 => 'recap_weekly',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      532 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'recap_weekly.edit',
          ),
          1 => 
          array (
            0 => 'recap_weekly',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      540 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'recap_weekly.update',
          ),
          1 => 
          array (
            0 => 'recap_weekly',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'recap_weekly.destroy',
          ),
          1 => 
          array (
            0 => 'recap_weekly',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      575 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'structures.show',
          ),
          1 => 
          array (
            0 => 'structure',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      588 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'structures.edit',
          ),
          1 => 
          array (
            0 => 'structure',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      596 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'structures.update',
          ),
          1 => 
          array (
            0 => 'structure',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'structures.destroy',
          ),
          1 => 
          array (
            0 => 'structure',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      625 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'interim.show',
          ),
          1 => 
          array (
            0 => 'interim',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      638 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'interim.edit',
          ),
          1 => 
          array (
            0 => 'interim',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      646 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'interim.update',
          ),
          1 => 
          array (
            0 => 'interim',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'interim.destroy',
          ),
          1 => 
          array (
            0 => 'interim',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      680 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'trackings.show',
          ),
          1 => 
          array (
            0 => 'tracking',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      693 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'trackings.edit',
          ),
          1 => 
          array (
            0 => 'tracking',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      701 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'trackings.update',
          ),
          1 => 
          array (
            0 => 'tracking',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'trackings.destroy',
          ),
          1 => 
          array (
            0 => 'tracking',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      731 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'aggregateur.getTransactionByIdAggregateur',
          ),
          1 => 
          array (
            0 => 'idAggre',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      753 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transactionv3.show',
          ),
          1 => 
          array (
            0 => 'transactionv3',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      766 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transactionv3.edit',
          ),
          1 => 
          array (
            0 => 'transactionv3',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      774 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transactionv3.update',
          ),
          1 => 
          array (
            0 => 'transactionv3',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'transactionv3.destroy',
          ),
          1 => 
          array (
            0 => 'transactionv3',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      812 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'aggregateur.show',
          ),
          1 => 
          array (
            0 => 'aggregateur',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      825 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'aggregateur.edit',
          ),
          1 => 
          array (
            0 => 'aggregateur',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      833 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'aggregateur.update',
          ),
          1 => 
          array (
            0 => 'aggregateur',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'aggregateur.destroy',
          ),
          1 => 
          array (
            0 => 'aggregateur',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      855 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update',
          ),
          1 => 
          array (
            0 => 'aggregateur',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      907 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'facturation_envalidation.show',
          ),
          1 => 
          array (
            0 => 'facturation_envalidation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      920 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'facturation_envalidation.edit',
          ),
          1 => 
          array (
            0 => 'facturation_envalidation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      928 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'facturation_envalidation.update',
          ),
          1 => 
          array (
            0 => 'facturation_envalidation',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'facturation_envalidation.destroy',
          ),
          1 => 
          array (
            0 => 'facturation_envalidation',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      943 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'facturation_envalidation.search',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      956 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'facturation_envalidation.rejet',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      986 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'facturation_valide.show',
          ),
          1 => 
          array (
            0 => 'facturation_valide',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      999 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'facturation_valide.edit',
          ),
          1 => 
          array (
            0 => 'facturation_valide',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1007 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'facturation_valide.update',
          ),
          1 => 
          array (
            0 => 'facturation_valide',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'facturation_valide.destroy',
          ),
          1 => 
          array (
            0 => 'facturation_valide',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1023 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'facturation_valide.search',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1042 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'facturation_valide.export_pdf',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1074 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'facturation_rejetee.show',
          ),
          1 => 
          array (
            0 => 'facturation_rejetee',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1088 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'facturation_rejetee.edit',
          ),
          1 => 
          array (
            0 => 'facturation_rejetee',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1097 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'facturation_rejetee.update',
          ),
          1 => 
          array (
            0 => 'facturation_rejetee',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'facturation_rejetee.destroy',
          ),
          1 => 
          array (
            0 => 'facturation_rejetee',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1113 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'facturation_rejetee.search',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1151 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hors_catalogue.show',
          ),
          1 => 
          array (
            0 => 'hors_catalogue',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1165 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hors_catalogue.edit',
          ),
          1 => 
          array (
            0 => 'hors_catalogue',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1174 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hors_catalogue.update',
          ),
          1 => 
          array (
            0 => 'hors_catalogue',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'hors_catalogue.destroy',
          ),
          1 => 
          array (
            0 => 'hors_catalogue',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1205 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vaDKu1w3OknxxJa7',
          ),
          1 => 
          array (
            0 => 'folder',
            1 => 'file',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1223 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U1RbU1vz3yurxwM1',
          ),
          1 => 
          array (
            0 => 'folder1',
            1 => 'folder2',
            2 => 'file',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::69BLlEepIrAQK29s' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@AuthRouteAPI',
        'controller' => 'App\\Http\\Controllers\\UserController@AuthRouteAPI',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::69BLlEepIrAQK29s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XJP2XMF8mHkCX8tr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/catalogue_by_sim_head',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\ApiCatalogueController@index',
        'controller' => 'App\\Http\\Controllers\\ApiCatalogueController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::XJP2XMF8mHkCX8tr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::z33nibL0Nk0ih2Tn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::z33nibL0Nk0ih2Tn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::45s2T9mVOX7S8tJn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::45s2T9mVOX7S8tJn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KuLactl2kNA3lUVN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::KuLactl2kNA3lUVN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9tB4yLVe1EqeKbZy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9tB4yLVe1EqeKbZy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'auth.login',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U3XkGVcbFvyCtsha' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::U3XkGVcbFvyCtsha',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'dashboard',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'catalogue.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'catalogue',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'catalogue.index',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\CatalogueController@index',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\CatalogueController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'catalogue.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'catalogue/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'catalogue.create',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\CatalogueController@create',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\CatalogueController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'catalogue.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'catalogue',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'catalogue.store',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\CatalogueController@store',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\CatalogueController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'catalogue.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'catalogue/{catalogue}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'catalogue.show',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\CatalogueController@show',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\CatalogueController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'catalogue.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'catalogue/{catalogue}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'catalogue.edit',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\CatalogueController@edit',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\CatalogueController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'catalogue.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'catalogue/{catalogue}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'catalogue.update',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\CatalogueController@update',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\CatalogueController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'catalogue.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'catalogue/{catalogue}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'catalogue.destroy',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\CatalogueController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\CatalogueController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'dashboard.index',
        'uses' => '\\App\\Http\\Controllers\\DashboardController@index',
        'controller' => '\\App\\Http\\Controllers\\DashboardController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'dashboard.create',
        'uses' => '\\App\\Http\\Controllers\\DashboardController@create',
        'controller' => '\\App\\Http\\Controllers\\DashboardController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'dashboard.store',
        'uses' => '\\App\\Http\\Controllers\\DashboardController@store',
        'controller' => '\\App\\Http\\Controllers\\DashboardController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/{dashboard}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'dashboard.show',
        'uses' => '\\App\\Http\\Controllers\\DashboardController@show',
        'controller' => '\\App\\Http\\Controllers\\DashboardController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/{dashboard}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'dashboard.edit',
        'uses' => '\\App\\Http\\Controllers\\DashboardController@edit',
        'controller' => '\\App\\Http\\Controllers\\DashboardController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/{dashboard}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'dashboard.update',
        'uses' => '\\App\\Http\\Controllers\\DashboardController@update',
        'controller' => '\\App\\Http\\Controllers\\DashboardController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/{dashboard}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'dashboard.destroy',
        'uses' => '\\App\\Http\\Controllers\\DashboardController@destroy',
        'controller' => '\\App\\Http\\Controllers\\DashboardController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'permissions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'permissions.index',
        'uses' => '\\App\\Http\\Controllers\\Securite\\PermissionController@index',
        'controller' => '\\App\\Http\\Controllers\\Securite\\PermissionController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'permissions.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'permissions/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'permissions.create',
        'uses' => '\\App\\Http\\Controllers\\Securite\\PermissionController@create',
        'controller' => '\\App\\Http\\Controllers\\Securite\\PermissionController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'permissions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'permissions.store',
        'uses' => '\\App\\Http\\Controllers\\Securite\\PermissionController@store',
        'controller' => '\\App\\Http\\Controllers\\Securite\\PermissionController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'permissions.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'permissions/{permission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'permissions.show',
        'uses' => '\\App\\Http\\Controllers\\Securite\\PermissionController@show',
        'controller' => '\\App\\Http\\Controllers\\Securite\\PermissionController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'permissions.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'permissions/{permission}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'permissions.edit',
        'uses' => '\\App\\Http\\Controllers\\Securite\\PermissionController@edit',
        'controller' => '\\App\\Http\\Controllers\\Securite\\PermissionController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'permissions.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'permissions/{permission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'permissions.update',
        'uses' => '\\App\\Http\\Controllers\\Securite\\PermissionController@update',
        'controller' => '\\App\\Http\\Controllers\\Securite\\PermissionController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'permissions.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'permissions/{permission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'permissions.destroy',
        'uses' => '\\App\\Http\\Controllers\\Securite\\PermissionController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Securite\\PermissionController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'users.index',
        'uses' => '\\App\\Http\\Controllers\\Securite\\UserController@index',
        'controller' => '\\App\\Http\\Controllers\\Securite\\UserController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'users.create',
        'uses' => '\\App\\Http\\Controllers\\Securite\\UserController@create',
        'controller' => '\\App\\Http\\Controllers\\Securite\\UserController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'users.store',
        'uses' => '\\App\\Http\\Controllers\\Securite\\UserController@store',
        'controller' => '\\App\\Http\\Controllers\\Securite\\UserController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'users.show',
        'uses' => '\\App\\Http\\Controllers\\Securite\\UserController@show',
        'controller' => '\\App\\Http\\Controllers\\Securite\\UserController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/{user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'users.edit',
        'uses' => '\\App\\Http\\Controllers\\Securite\\UserController@edit',
        'controller' => '\\App\\Http\\Controllers\\Securite\\UserController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'users.update',
        'uses' => '\\App\\Http\\Controllers\\Securite\\UserController@update',
        'controller' => '\\App\\Http\\Controllers\\Securite\\UserController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'users.destroy',
        'uses' => '\\App\\Http\\Controllers\\Securite\\UserController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Securite\\UserController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'roles.index',
        'uses' => '\\App\\Http\\Controllers\\Securite\\RoleController@index',
        'controller' => '\\App\\Http\\Controllers\\Securite\\RoleController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'roles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'roles.create',
        'uses' => '\\App\\Http\\Controllers\\Securite\\RoleController@create',
        'controller' => '\\App\\Http\\Controllers\\Securite\\RoleController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'roles.store',
        'uses' => '\\App\\Http\\Controllers\\Securite\\RoleController@store',
        'controller' => '\\App\\Http\\Controllers\\Securite\\RoleController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'roles.show',
        'uses' => '\\App\\Http\\Controllers\\Securite\\RoleController@show',
        'controller' => '\\App\\Http\\Controllers\\Securite\\RoleController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'roles/{role}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'roles.edit',
        'uses' => '\\App\\Http\\Controllers\\Securite\\RoleController@edit',
        'controller' => '\\App\\Http\\Controllers\\Securite\\RoleController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'roles.update',
        'uses' => '\\App\\Http\\Controllers\\Securite\\RoleController@update',
        'controller' => '\\App\\Http\\Controllers\\Securite\\RoleController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'roles.destroy',
        'uses' => '\\App\\Http\\Controllers\\Securite\\RoleController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Securite\\RoleController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'structures.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'structures',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'structures.index',
        'uses' => '\\App\\Http\\Controllers\\StructureOFMS\\StructureController@index',
        'controller' => '\\App\\Http\\Controllers\\StructureOFMS\\StructureController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'structures.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'structures/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'structures.create',
        'uses' => '\\App\\Http\\Controllers\\StructureOFMS\\StructureController@create',
        'controller' => '\\App\\Http\\Controllers\\StructureOFMS\\StructureController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'structures.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'structures',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'structures.store',
        'uses' => '\\App\\Http\\Controllers\\StructureOFMS\\StructureController@store',
        'controller' => '\\App\\Http\\Controllers\\StructureOFMS\\StructureController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'structures.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'structures/{structure}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'structures.show',
        'uses' => '\\App\\Http\\Controllers\\StructureOFMS\\StructureController@show',
        'controller' => '\\App\\Http\\Controllers\\StructureOFMS\\StructureController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'structures.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'structures/{structure}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'structures.edit',
        'uses' => '\\App\\Http\\Controllers\\StructureOFMS\\StructureController@edit',
        'controller' => '\\App\\Http\\Controllers\\StructureOFMS\\StructureController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'structures.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'structures/{structure}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'structures.update',
        'uses' => '\\App\\Http\\Controllers\\StructureOFMS\\StructureController@update',
        'controller' => '\\App\\Http\\Controllers\\StructureOFMS\\StructureController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'structures.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'structures/{structure}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'structures.destroy',
        'uses' => '\\App\\Http\\Controllers\\StructureOFMS\\StructureController@destroy',
        'controller' => '\\App\\Http\\Controllers\\StructureOFMS\\StructureController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'interim.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'interim',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'interim.index',
        'uses' => '\\App\\Http\\Controllers\\Securite\\InterimController@index',
        'controller' => '\\App\\Http\\Controllers\\Securite\\InterimController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'interim.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'interim/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'interim.create',
        'uses' => '\\App\\Http\\Controllers\\Securite\\InterimController@create',
        'controller' => '\\App\\Http\\Controllers\\Securite\\InterimController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'interim.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'interim',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'interim.store',
        'uses' => '\\App\\Http\\Controllers\\Securite\\InterimController@store',
        'controller' => '\\App\\Http\\Controllers\\Securite\\InterimController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'interim.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'interim/{interim}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'interim.show',
        'uses' => '\\App\\Http\\Controllers\\Securite\\InterimController@show',
        'controller' => '\\App\\Http\\Controllers\\Securite\\InterimController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'interim.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'interim/{interim}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'interim.edit',
        'uses' => '\\App\\Http\\Controllers\\Securite\\InterimController@edit',
        'controller' => '\\App\\Http\\Controllers\\Securite\\InterimController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'interim.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'interim/{interim}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'interim.update',
        'uses' => '\\App\\Http\\Controllers\\Securite\\InterimController@update',
        'controller' => '\\App\\Http\\Controllers\\Securite\\InterimController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'interim.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'interim/{interim}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'interim.destroy',
        'uses' => '\\App\\Http\\Controllers\\Securite\\InterimController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Securite\\InterimController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update.user.status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/update-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'uses' => '\\App\\Http\\Controllers\\Securite\\UserController@updateStatus',
        'controller' => '\\App\\Http\\Controllers\\Securite\\UserController@updateStatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.user.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'trackings.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'trackings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'trackings.index',
        'uses' => '\\App\\Http\\Controllers\\Securite\\TrackingController@index',
        'controller' => '\\App\\Http\\Controllers\\Securite\\TrackingController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'trackings.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'trackings/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'trackings.create',
        'uses' => '\\App\\Http\\Controllers\\Securite\\TrackingController@create',
        'controller' => '\\App\\Http\\Controllers\\Securite\\TrackingController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'trackings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'trackings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'trackings.store',
        'uses' => '\\App\\Http\\Controllers\\Securite\\TrackingController@store',
        'controller' => '\\App\\Http\\Controllers\\Securite\\TrackingController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'trackings.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'trackings/{tracking}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'trackings.show',
        'uses' => '\\App\\Http\\Controllers\\Securite\\TrackingController@show',
        'controller' => '\\App\\Http\\Controllers\\Securite\\TrackingController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'trackings.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'trackings/{tracking}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'trackings.edit',
        'uses' => '\\App\\Http\\Controllers\\Securite\\TrackingController@edit',
        'controller' => '\\App\\Http\\Controllers\\Securite\\TrackingController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'trackings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'trackings/{tracking}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'trackings.update',
        'uses' => '\\App\\Http\\Controllers\\Securite\\TrackingController@update',
        'controller' => '\\App\\Http\\Controllers\\Securite\\TrackingController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'trackings.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'trackings/{tracking}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
          2 => 'role:Super Admin',
        ),
        'as' => 'trackings.destroy',
        'uses' => '\\App\\Http\\Controllers\\Securite\\TrackingController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Securite\\TrackingController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'aggregateur.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'aggregateur',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'aggregateur.index',
        'uses' => '\\App\\Http\\Controllers\\AggregateurController@index',
        'controller' => '\\App\\Http\\Controllers\\AggregateurController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'aggregateur.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'aggregateur/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'aggregateur.create',
        'uses' => '\\App\\Http\\Controllers\\AggregateurController@create',
        'controller' => '\\App\\Http\\Controllers\\AggregateurController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'aggregateur.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'aggregateur',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'aggregateur.store',
        'uses' => '\\App\\Http\\Controllers\\AggregateurController@store',
        'controller' => '\\App\\Http\\Controllers\\AggregateurController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'aggregateur.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'aggregateur/{aggregateur}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'aggregateur.show',
        'uses' => '\\App\\Http\\Controllers\\AggregateurController@show',
        'controller' => '\\App\\Http\\Controllers\\AggregateurController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'aggregateur.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'aggregateur/{aggregateur}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'aggregateur.edit',
        'uses' => '\\App\\Http\\Controllers\\AggregateurController@edit',
        'controller' => '\\App\\Http\\Controllers\\AggregateurController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'aggregateur.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'aggregateur/{aggregateur}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'aggregateur.update',
        'uses' => '\\App\\Http\\Controllers\\AggregateurController@update',
        'controller' => '\\App\\Http\\Controllers\\AggregateurController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'aggregateur.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'aggregateur/{aggregateur}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'aggregateur.destroy',
        'uses' => '\\App\\Http\\Controllers\\AggregateurController@destroy',
        'controller' => '\\App\\Http\\Controllers\\AggregateurController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'aggregateur/edit/{aggregateur}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\AggregateurController@update',
        'controller' => 'App\\Http\\Controllers\\AggregateurController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'aggregateur.getTransactionByIdAggregateur' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transactions/{idAggre}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\AggregateurController@getTransactionByIdAggregateur',
        'controller' => 'App\\Http\\Controllers\\AggregateurController@getTransactionByIdAggregateur',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'aggregateur.getTransactionByIdAggregateur',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partenaires_dormants.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'partenaires',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'uses' => '\\App\\Http\\Controllers\\Facturation\\ComptesDormantsController@index',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\ComptesDormantsController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'partenaires_dormants.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facturation_envalidation.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'facturation_envalidation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'facturation_envalidation.index',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\FacturationValidationController@index',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\FacturationValidationController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facturation_envalidation.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'facturation_envalidation/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'facturation_envalidation.create',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\FacturationValidationController@create',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\FacturationValidationController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facturation_envalidation.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'facturation_envalidation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'facturation_envalidation.store',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\FacturationValidationController@store',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\FacturationValidationController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facturation_envalidation.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'facturation_envalidation/{facturation_envalidation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'facturation_envalidation.show',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\FacturationValidationController@show',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\FacturationValidationController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facturation_envalidation.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'facturation_envalidation/{facturation_envalidation}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'facturation_envalidation.edit',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\FacturationValidationController@edit',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\FacturationValidationController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facturation_envalidation.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'facturation_envalidation/{facturation_envalidation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'facturation_envalidation.update',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\FacturationValidationController@update',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\FacturationValidationController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facturation_envalidation.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'facturation_envalidation/{facturation_envalidation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'facturation_envalidation.destroy',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\FacturationValidationController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\FacturationValidationController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facturation_envalidation.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'facturation_envalidation/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'uses' => '\\App\\Http\\Controllers\\Facturation\\FacturationValidationController@search',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\FacturationValidationController@search',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'facturation_envalidation.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facturation_envalidation.rejet' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'facturation_envalidation/rejet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'uses' => '\\App\\Http\\Controllers\\Facturation\\FacturationValidationController@rejet',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\FacturationValidationController@rejet',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'facturation_envalidation.rejet',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facturation_valide.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'facturation_valide',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'facturation_valide.index',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\FacturationValideController@index',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\FacturationValideController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facturation_valide.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'facturation_valide/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'facturation_valide.create',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\FacturationValideController@create',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\FacturationValideController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facturation_valide.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'facturation_valide',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'facturation_valide.store',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\FacturationValideController@store',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\FacturationValideController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facturation_valide.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'facturation_valide/{facturation_valide}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'facturation_valide.show',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\FacturationValideController@show',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\FacturationValideController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facturation_valide.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'facturation_valide/{facturation_valide}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'facturation_valide.edit',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\FacturationValideController@edit',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\FacturationValideController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facturation_valide.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'facturation_valide/{facturation_valide}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'facturation_valide.update',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\FacturationValideController@update',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\FacturationValideController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facturation_valide.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'facturation_valide/{facturation_valide}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'facturation_valide.destroy',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\FacturationValideController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\FacturationValideController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facturation_valide.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'facturation_valide/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'uses' => '\\App\\Http\\Controllers\\Facturation\\FacturationValideController@search',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\FacturationValideController@search',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'facturation_valide.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facturation_rejetee.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'facturation_rejetee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'facturation_rejetee.index',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\FacturationRejeteController@index',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\FacturationRejeteController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facturation_rejetee.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'facturation_rejetee/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'facturation_rejetee.create',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\FacturationRejeteController@create',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\FacturationRejeteController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facturation_rejetee.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'facturation_rejetee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'facturation_rejetee.store',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\FacturationRejeteController@store',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\FacturationRejeteController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facturation_rejetee.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'facturation_rejetee/{facturation_rejetee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'facturation_rejetee.show',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\FacturationRejeteController@show',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\FacturationRejeteController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facturation_rejetee.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'facturation_rejetee/{facturation_rejetee}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'facturation_rejetee.edit',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\FacturationRejeteController@edit',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\FacturationRejeteController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facturation_rejetee.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'facturation_rejetee/{facturation_rejetee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'facturation_rejetee.update',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\FacturationRejeteController@update',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\FacturationRejeteController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facturation_rejetee.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'facturation_rejetee/{facturation_rejetee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'facturation_rejetee.destroy',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\FacturationRejeteController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\FacturationRejeteController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facturation_rejetee.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'facturation_rejetee/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'uses' => '\\App\\Http\\Controllers\\Facturation\\FacturationRejeteController@search',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\FacturationRejeteController@search',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'facturation_rejetee.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'recyclage_uv.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'recyclage_uv',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'recyclage_uv.index',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\RecyclageUVController@index',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\RecyclageUVController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'recyclage_uv.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'recyclage_uv/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'recyclage_uv.create',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\RecyclageUVController@create',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\RecyclageUVController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'recyclage_uv.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'recyclage_uv',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'recyclage_uv.store',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\RecyclageUVController@store',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\RecyclageUVController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'recyclage_uv.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'recyclage_uv/{recyclage_uv}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'recyclage_uv.show',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\RecyclageUVController@show',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\RecyclageUVController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'recyclage_uv.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'recyclage_uv/{recyclage_uv}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'recyclage_uv.edit',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\RecyclageUVController@edit',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\RecyclageUVController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'recyclage_uv.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'recyclage_uv/{recyclage_uv}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'recyclage_uv.update',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\RecyclageUVController@update',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\RecyclageUVController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'recyclage_uv.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'recyclage_uv/{recyclage_uv}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'recyclage_uv.destroy',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\RecyclageUVController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\RecyclageUVController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'recyclage_uv.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'recyclage_uv/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'uses' => '\\App\\Http\\Controllers\\Facturation\\RecyclageUVController@search',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\RecyclageUVController@search',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'recyclage_uv.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hors_catalogue.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hors_catalogue',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'hors_catalogue.index',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\HorsCatalogueController@index',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\HorsCatalogueController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hors_catalogue.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hors_catalogue/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'hors_catalogue.create',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\HorsCatalogueController@create',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\HorsCatalogueController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hors_catalogue.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'hors_catalogue',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'hors_catalogue.store',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\HorsCatalogueController@store',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\HorsCatalogueController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hors_catalogue.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hors_catalogue/{hors_catalogue}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'hors_catalogue.show',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\HorsCatalogueController@show',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\HorsCatalogueController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hors_catalogue.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hors_catalogue/{hors_catalogue}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'hors_catalogue.edit',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\HorsCatalogueController@edit',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\HorsCatalogueController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hors_catalogue.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'hors_catalogue/{hors_catalogue}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'hors_catalogue.update',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\HorsCatalogueController@update',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\HorsCatalogueController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hors_catalogue.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'hors_catalogue/{hors_catalogue}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'hors_catalogue.destroy',
        'uses' => '\\App\\Http\\Controllers\\Facturation\\HorsCatalogueController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\HorsCatalogueController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facturation_valide.export_pdf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'facturation_valide/export_pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'uses' => '\\App\\Http\\Controllers\\Facturation\\FacturationValideController@export_pdf',
        'controller' => '\\App\\Http\\Controllers\\Facturation\\FacturationValideController@export_pdf',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'facturation_valide.export_pdf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transactionv3.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transactionv3',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'transactionv3.index',
        'uses' => '\\App\\Http\\Controllers\\IRT\\TransactionController@index',
        'controller' => '\\App\\Http\\Controllers\\IRT\\TransactionController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transactionv3.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transactionv3/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'transactionv3.create',
        'uses' => '\\App\\Http\\Controllers\\IRT\\TransactionController@create',
        'controller' => '\\App\\Http\\Controllers\\IRT\\TransactionController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transactionv3.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'transactionv3',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'transactionv3.store',
        'uses' => '\\App\\Http\\Controllers\\IRT\\TransactionController@store',
        'controller' => '\\App\\Http\\Controllers\\IRT\\TransactionController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transactionv3.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transactionv3/{transactionv3}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'transactionv3.show',
        'uses' => '\\App\\Http\\Controllers\\IRT\\TransactionController@show',
        'controller' => '\\App\\Http\\Controllers\\IRT\\TransactionController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transactionv3.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transactionv3/{transactionv3}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'transactionv3.edit',
        'uses' => '\\App\\Http\\Controllers\\IRT\\TransactionController@edit',
        'controller' => '\\App\\Http\\Controllers\\IRT\\TransactionController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transactionv3.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'transactionv3/{transactionv3}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'transactionv3.update',
        'uses' => '\\App\\Http\\Controllers\\IRT\\TransactionController@update',
        'controller' => '\\App\\Http\\Controllers\\IRT\\TransactionController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transactionv3.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'transactionv3/{transactionv3}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'transactionv3.destroy',
        'uses' => '\\App\\Http\\Controllers\\IRT\\TransactionController@destroy',
        'controller' => '\\App\\Http\\Controllers\\IRT\\TransactionController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'recap_monthly.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'recap_monthly',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'recap_monthly.index',
        'uses' => '\\App\\Http\\Controllers\\IRT\\RecapMonthlyController@index',
        'controller' => '\\App\\Http\\Controllers\\IRT\\RecapMonthlyController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'recap_monthly.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'recap_monthly/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'recap_monthly.create',
        'uses' => '\\App\\Http\\Controllers\\IRT\\RecapMonthlyController@create',
        'controller' => '\\App\\Http\\Controllers\\IRT\\RecapMonthlyController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'recap_monthly.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'recap_monthly',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'recap_monthly.store',
        'uses' => '\\App\\Http\\Controllers\\IRT\\RecapMonthlyController@store',
        'controller' => '\\App\\Http\\Controllers\\IRT\\RecapMonthlyController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'recap_monthly.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'recap_monthly/{recap_monthly}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'recap_monthly.show',
        'uses' => '\\App\\Http\\Controllers\\IRT\\RecapMonthlyController@show',
        'controller' => '\\App\\Http\\Controllers\\IRT\\RecapMonthlyController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'recap_monthly.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'recap_monthly/{recap_monthly}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'recap_monthly.edit',
        'uses' => '\\App\\Http\\Controllers\\IRT\\RecapMonthlyController@edit',
        'controller' => '\\App\\Http\\Controllers\\IRT\\RecapMonthlyController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'recap_monthly.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'recap_monthly/{recap_monthly}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'recap_monthly.update',
        'uses' => '\\App\\Http\\Controllers\\IRT\\RecapMonthlyController@update',
        'controller' => '\\App\\Http\\Controllers\\IRT\\RecapMonthlyController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'recap_monthly.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'recap_monthly/{recap_monthly}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'recap_monthly.destroy',
        'uses' => '\\App\\Http\\Controllers\\IRT\\RecapMonthlyController@destroy',
        'controller' => '\\App\\Http\\Controllers\\IRT\\RecapMonthlyController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'recap_weekly.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'recap_weekly',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'recap_weekly.index',
        'uses' => '\\App\\Http\\Controllers\\IRT\\RecapWeeklyController@index',
        'controller' => '\\App\\Http\\Controllers\\IRT\\RecapWeeklyController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'recap_weekly.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'recap_weekly/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'recap_weekly.create',
        'uses' => '\\App\\Http\\Controllers\\IRT\\RecapWeeklyController@create',
        'controller' => '\\App\\Http\\Controllers\\IRT\\RecapWeeklyController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'recap_weekly.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'recap_weekly',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'recap_weekly.store',
        'uses' => '\\App\\Http\\Controllers\\IRT\\RecapWeeklyController@store',
        'controller' => '\\App\\Http\\Controllers\\IRT\\RecapWeeklyController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'recap_weekly.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'recap_weekly/{recap_weekly}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'recap_weekly.show',
        'uses' => '\\App\\Http\\Controllers\\IRT\\RecapWeeklyController@show',
        'controller' => '\\App\\Http\\Controllers\\IRT\\RecapWeeklyController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'recap_weekly.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'recap_weekly/{recap_weekly}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'recap_weekly.edit',
        'uses' => '\\App\\Http\\Controllers\\IRT\\RecapWeeklyController@edit',
        'controller' => '\\App\\Http\\Controllers\\IRT\\RecapWeeklyController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'recap_weekly.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'recap_weekly/{recap_weekly}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'recap_weekly.update',
        'uses' => '\\App\\Http\\Controllers\\IRT\\RecapWeeklyController@update',
        'controller' => '\\App\\Http\\Controllers\\IRT\\RecapWeeklyController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'recap_weekly.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'recap_weekly/{recap_weekly}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'recap_weekly.destroy',
        'uses' => '\\App\\Http\\Controllers\\IRT\\RecapWeeklyController@destroy',
        'controller' => '\\App\\Http\\Controllers\\IRT\\RecapWeeklyController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'catalogue_international.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'catalogue_international',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'catalogue_international.index',
        'uses' => '\\App\\Http\\Controllers\\International\\ICatalogueController@index',
        'controller' => '\\App\\Http\\Controllers\\International\\ICatalogueController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'catalogue_international.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'catalogue_international/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'catalogue_international.create',
        'uses' => '\\App\\Http\\Controllers\\International\\ICatalogueController@create',
        'controller' => '\\App\\Http\\Controllers\\International\\ICatalogueController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'catalogue_international.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'catalogue_international',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'catalogue_international.store',
        'uses' => '\\App\\Http\\Controllers\\International\\ICatalogueController@store',
        'controller' => '\\App\\Http\\Controllers\\International\\ICatalogueController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'catalogue_international.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'catalogue_international/{catalogue_international}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'catalogue_international.show',
        'uses' => '\\App\\Http\\Controllers\\International\\ICatalogueController@show',
        'controller' => '\\App\\Http\\Controllers\\International\\ICatalogueController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'catalogue_international.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'catalogue_international/{catalogue_international}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'catalogue_international.edit',
        'uses' => '\\App\\Http\\Controllers\\International\\ICatalogueController@edit',
        'controller' => '\\App\\Http\\Controllers\\International\\ICatalogueController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'catalogue_international.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'catalogue_international/{catalogue_international}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'catalogue_international.update',
        'uses' => '\\App\\Http\\Controllers\\International\\ICatalogueController@update',
        'controller' => '\\App\\Http\\Controllers\\International\\ICatalogueController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'catalogue_international.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'catalogue_international/{catalogue_international}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'as' => 'catalogue_international.destroy',
        'uses' => '\\App\\Http\\Controllers\\International\\ICatalogueController@destroy',
        'controller' => '\\App\\Http\\Controllers\\International\\ICatalogueController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'catalogue_international.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'catalogue_international/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'uses' => '\\App\\Http\\Controllers\\International\\ICatalogueController@delete',
        'controller' => '\\App\\Http\\Controllers\\International\\ICatalogueController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'catalogue_international.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IspADjvtXVKAirMv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'download_file_action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\ExportFile@download_file_action',
        'controller' => 'App\\Http\\Controllers\\ExportFile@download_file_action',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IspADjvtXVKAirMv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::N5l6wQnTvGtEOClE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'download_zip_file_action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\ExportFile@download_zip_file_action',
        'controller' => 'App\\Http\\Controllers\\ExportFile@download_zip_file_action',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::N5l6wQnTvGtEOClE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vaDKu1w3OknxxJa7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{folder}/{file}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\MetricaController@indexWithOneFolder',
        'controller' => 'App\\Http\\Controllers\\MetricaController@indexWithOneFolder',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::vaDKu1w3OknxxJa7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U1RbU1vz3yurxwM1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{folder1}/{folder2}/{file}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\MetricaController@indexWithTwoFolder',
        'controller' => 'App\\Http\\Controllers\\MetricaController@indexWithTwoFolder',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::U1RbU1vz3yurxwM1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XfwAP4XFzUz4tDop' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'preventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\MetricaController@logout',
        'controller' => 'App\\Http\\Controllers\\MetricaController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::XfwAP4XFzUz4tDop',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
