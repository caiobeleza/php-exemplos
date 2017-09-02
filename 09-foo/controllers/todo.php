<?php

#
# controller todo
#

$app->group('/todo', function () {
       

    # create
    $this->get('/insert/{todo}', function ($request, $response, $args) {

        $todo = $request->getAttribute('todo');
        insert( get_new($todo) );
        return $response->withRedirect($request->getUri()->getBasePath());
        
    });

    # read
    $this->get('/read/{id}', function ($request, $response, $args) {

        #
        # nothing
        #
        
    });
    
    # update
    $this->get('/update/id/{id}/descr/{descricao}', function ($request, $response, $args) {
        
        $id    = $request->getAttribute('id');
        $descr = $request->getAttribute('descricao');
        update($id, $descr);

        return $response->withRedirect($request->getUri()->getBasePath());
        
    });
 
    # delete
    $this->get('/delete/{id}', function ($request, $response, $args) {
        delete($request->getAttribute('id'));
        return $response->withRedirect($request->getUri()->getBasePath());
    });    
    
});






