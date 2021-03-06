<?php
/**
 * @author Patsura Dmitry https://github.com/ovr <talk@dmtry.me>
 */

namespace Api\Controller;

use Api\Model\User;

class UserController extends AbstractController
{
    /**
     * @SWG\Get(
     * 		tags={"User"},
     * 		path="/user/{id}",
     * 		operationId="getUserById",
     * 		summary="Find user by $id",
     * 		@SWG\Parameter(
     * 			name="id",
     * 			description="$id of the specified",
     * 			in="path",
     * 			required=true,
     * 			type="string"
     * 		),
     * 		@SWG\Response(
     * 			response=200,
     * 			description="success",
     * 			@SWG\Schema(ref="#/definitions/UserResponse")
     * 		),
     * 		@SWG\Response(
     * 			response=404,
     * 			description="Not found"
     * 		)
     * )
     */
    public function getAction()
    {
        return User::generateFake()->toApi();
    }
}
