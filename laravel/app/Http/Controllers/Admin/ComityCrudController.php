<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\PagesRequest as UpdateRequest;

class ComityCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Comity');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/comity');
        $this->crud->setEntityNameStrings('comity', 'comity');
        $this->crud->denyAccess(['create', 'delete']);

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        // ------ CRUD FIELDS
        $this->crud->addField(
            [
                'label'      => 'Nom',
                'name'       => 'name',
                'attributes' => [
                    'disabled' => 'disabled',
                ],
            ],
            'both'
        );
        $this->crud->addField(
            [
                'label' => 'Valeur *',
                'name' => 'value',
                'type' => 'textarea',
            ],
            'both'
        );
        $this->crud->addField(
            [
                'label'      => 'Description',
                'name'       => 'description',
                'attributes' => [
                    'disabled' => 'disabled',
                ],
            ],
            'both'
        );

        // ------ CRUD COLUMNS
        $this->crud->addColumns( [
            [
                'label' => 'Nom',
                'name' => 'name',
            ],
            [
                'label' => 'Valeur',
                'name' => 'value',
            ],
            [
                'label' => 'Description',
                'name' => 'description',
            ],
        ] );

    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
