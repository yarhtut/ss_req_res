<?php

class Hijack extends Controller {

    private static $allowed_actions = array(
        'index'
    );

    public function index(SS_HTTPRequest $request) {
        $name = ($request->getVar('name'));
        $age = ($request->getVar('age'));

        $this->response->setBody(json_encode(array(
            'name' => $age,
            'age' => $name,
            'message' => 'This is extneds on Base Controller Class'
        )));

        $this->response->addHeader("Content-type", "application/json");

        $this->response->setStatusCode(201);

        return $this->response;
    }
}
