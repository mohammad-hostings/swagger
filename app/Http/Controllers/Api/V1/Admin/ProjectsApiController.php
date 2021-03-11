<?php

class ProjectsApiController extends Controller
{
    
     /**
 * @OA\Post(
 * path="/addList",
 * summary="Add a List",
 * description="Add a List",
 * tags={"Contact List"},
   * @OA\Parameter(
 *          name="host",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
   * @OA\Parameter(
 *          name="api_token",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
  * @OA\Parameter(
 *          name="list_name",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
 * @OA\Parameter(
 *          name="owner_name",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
  * @OA\Parameter(
 *          name="owner_email",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *            type="string",
 *            example="owner@example.com",
 *            format="email"
 *          )
 *      ),
  * @OA\Parameter(
 *          name="reply_email",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *            type="string",
 *            example="reply@example.com",
 *            format="email"
 *          )
 *      ),
  * @OA\Parameter(
 *          name="bounce_email",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *            type="string",
 *            example="bounce@example.com",
 *            format="email"
 *          )
 *      ),
 * @OA\Response(
 *    response=422,
 *    description="there is something wrong",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, there is something wrong. Please try again")
 *        )
 *     )
 * )
 */

     /**
 * @OA\Get(
 * path="/getList/{id}",
 * summary="Get Contact List Details",
 * description="Get Contact List Details",
 * tags={"Contact List"},
   * @OA\Parameter(
 *          name="host",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
   * @OA\Parameter(
 *          name="api_token",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
  * @OA\Parameter(
 *          name="id",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
 * @OA\Response(
 *    response=422,
 *    description="there is something wrong",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, there is something wrong. Please try again")
 *        )
 *     )
 * )
 */

     /**
 * @OA\Put(
 * path="/updateList/{id}",
 * summary="Update Contact List",
 * description="Update Contact List",
 * tags={"Contact List"},
   * @OA\Parameter(
 *          name="host",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
   * @OA\Parameter(
 *          name="api_token",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
  * @OA\Parameter(
 *          name="id",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
 * @OA\Response(
 *    response=422,
 *    description="there is something wrong",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, there is something wrong. Please try again")
 *        )
 *     )
 * )
 */

     /**
 * @OA\Get(
 * path="/getLists",
 * summary="Get Contact Lists",
 * description="Get Contact Lists",
 * tags={"Contact List"},
   * @OA\Parameter(
 *          name="host",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
   * @OA\Parameter(
 *          name="api_token",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
 * @OA\Response(
 *    response=422,
 *    description="there is something wrong",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, there is something wrong. Please try again")
 *        )
 *     )
 * )
 */
 
       /**
 * @OA\Delete(
 * path="/deleteList/{id}/{type}",
 * summary="Delete Contact List",
 * description="Delete Contact List",
 * tags={"Contact List"},
   * @OA\Parameter(
 *          name="host",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
   * @OA\Parameter(
 *          name="api_token",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="id",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="type",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
 * @OA\Response(
 *    response=422,
 *    description="there is something wrong",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, there is something wrong. Please try again")
 *        )
 *     )
 * )
 */
 
     /**
 * @OA\Delete(
 * path="/deleteListGroup/{group_id}/{delete_lists}",
 * summary="Delete List Group",
 * description="Delete List Group",
 * tags={"Contact List"},
   * @OA\Parameter(
 *          name="host",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
   * @OA\Parameter(
 *          name="api_token",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="group_id",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
 * @OA\Response(
 *    response=500,
 *    description="there is something wrong",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, there is something wrong. Please try again")
 *        )
 *     )
 * )
 */

    /**
 * @OA\POST(
 * path="/addContact",
 * summary="Add a Contact",
 * description="Add a Contact",
 * tags={"Contact"},
   * @OA\Parameter(
 *          name="host",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
   * @OA\Parameter(
 *          name="api_token",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="list_id",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
     * @OA\Parameter(
 *          name="email",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
 * @OA\Response(
 *    response=422,
 *    description="there is something wrong",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, there is something wrong. Please try again")
 *        )
 *     )
 * )
 */

    /**
 * @OA\PUT(
 * path="/updateContact/{id}",
 * summary="Update Contact Details",
 * description="Update Contact Details",
 * tags={"Contact"},
   * @OA\Parameter(
 *          name="host",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
   * @OA\Parameter(
 *          name="api_token",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="list_id",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
 * @OA\Response(
 *    response=422,
 *    description="there is something wrong",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, there is something wrong. Please try again")
 *        )
 *     )
 * )
 */

    /**
 * @OA\PUT(
 * path="/updateContactbyEmail/{email}",
 * summary="Update Contact By Email",
 * description="Update Contact By Email",
 * tags={"Contact"},
   * @OA\Parameter(
 *          name="host",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
   * @OA\Parameter(
 *          name="api_token",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="email",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
 * @OA\Response(
 *    response=422,
 *    description="there is something wrong",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, there is something wrong. Please try again")
 *        )
 *     )
 * )
 */

    /**
 * @OA\GET(
 * path="/getContact/{ids}",
 * summary="Get Contact Details",
 * description="Get Contact Details",
 * tags={"Contact"},
   * @OA\Parameter(
 *          name="host",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
   * @OA\Parameter(
 *          name="api_token",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="ids",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
 * @OA\Response(
 *    response=422,
 *    description="there is something wrong",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, there is something wrong. Please try again")
 *        )
 *     )
 * )
 */

    /**
 * @OA\GET(
 * path="/getContacts",
 * summary="Get Contacts",
 * description="Get Contacts",
 * tags={"Contact"},
   * @OA\Parameter(
 *          name="host",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
   * @OA\Parameter(
 *          name="api_token",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
 * @OA\Response(
 *    response=422,
 *    description="there is something wrong",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, there is something wrong. Please try again")
 *        )
 *     )
 * )
 */

    /**
 * @OA\Delete(
 * path="/deleteContact/{ids}",
 * summary="Delete Contact",
 * description="Delete Contact",
 * tags={"Contact"},
   * @OA\Parameter(
 *          name="host",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
   * @OA\Parameter(
 *          name="api_token",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="ids",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
 * @OA\Response(
 *    response=422,
 *    description="there is something wrong",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, there is something wrong. Please try again")
 *        )
 *     )
 * )
 */

    /**
 * @OA\Delete(
 * path="/deleteContactByEmail/{email}/{recursive}",
 * summary="Delete Contact By Email",
 * description="Delete Contact By Email",
 * tags={"Contact"},
   * @OA\Parameter(
 *          name="host",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
   * @OA\Parameter(
 *          name="api_token",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="email",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
 * @OA\Response(
 *    response=422,
 *    description="there is something wrong",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, there is something wrong. Please try again")
 *        )
 *     )
 * )
 */

    /**
 * @OA\PUT(
 * path="/markAsComplaint/{id}",
 * summary="Mark as Complaint",
 * description="Mark as Complaint",
 * tags={"Complaint"},
   * @OA\Parameter(
 *          name="host",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
   * @OA\Parameter(
 *          name="api_token",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="id",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
 * @OA\Response(
 *    response=422,
 *    description="there is something wrong",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, there is something wrong. Please try again")
 *        )
 *     )
 * )
 */

    /**
 * @OA\PUT(
 * path="/markAsUnsubscribed/{id}",
 * summary="Mark as Unsubscribed",
 * description="Mark as Unsubscribed",
 * tags={"Unsubscribed"},
   * @OA\Parameter(
 *          name="host",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
   * @OA\Parameter(
 *          name="api_token",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="id",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
 * @OA\Response(
 *    response=422,
 *    description="there is something wrong",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, there is something wrong. Please try again")
 *        )
 *     )
 * )
 */

    /**
 * @OA\PUT(
 * path="/markAsBounced/{id}",
 * summary="Mark as Soft/Hard Bounce",
 * description="Mark as Soft/Hard Bounce",
 * tags={"Soft/Hard Bounce"},
   * @OA\Parameter(
 *          name="host",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
   * @OA\Parameter(
 *          name="api_token",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="id",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
     * @OA\Parameter(
 *          name="type",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
 * @OA\Response(
 *    response=422,
 *    description="there is something wrong",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, there is something wrong. Please try again")
 *        )
 *     )
 * )
 */

    /**
 * @OA\Post(
 * path="/addBroadcast",
 * summary="Add a Broadcast",
 * description="Add a Broadcast",
 * tags={"Broadcast"},
   * @OA\Parameter(
 *          name="host",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
   * @OA\Parameter(
 *          name="api_token",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="broadcast_name",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
     * @OA\Parameter(
 *          name="group_name",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
      * @OA\Parameter(
 *          name="email_subject",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
      * @OA\Parameter(
 *          name="content_html",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
      * @OA\Parameter(
 *          name="content_text",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
 * @OA\Response(
 *    response=422,
 *    description="there is something wrong",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, there is something wrong. Please try again")
 *        )
 *     )
 * )
 */

    /**
 * @OA\PUT(
 * path="/updateBroadcast/{id}",
 * summary="Update Broadcast",
 * description="Update Broadcast",
 * tags={"Broadcast"},
   * @OA\Parameter(
 *          name="host",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
   * @OA\Parameter(
 *          name="api_token",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="id",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
 * @OA\Response(
 *    response=422,
 *    description="there is something wrong",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, there is something wrong. Please try again")
 *        )
 *     )
 * )
 */

    /**
 * @OA\GET(
 * path="/getBroadcasts",
 * summary="Get Broadcasts",
 * description="Get Broadcasts",
 * tags={"Broadcast"},
   * @OA\Parameter(
 *          name="host",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
   * @OA\Parameter(
 *          name="api_token",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
 * @OA\Response(
 *    response=422,
 *    description="there is something wrong",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, there is something wrong. Please try again")
 *        )
 *     )
 * )
 */



    /**
 * @OA\POSt(
 * path="/broadcastSchedule",
 * summary="Broadcast Schedule",
 * description="Broadcast Schedule",
 * tags={"Broadcast"},
   * @OA\Parameter(
 *          name="host",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
   * @OA\Parameter(
 *          name="api_token",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="name",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="type",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="broadcast_ids",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="smtp_ids",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="smtp_sequence",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="sending_time",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="sender_type",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="sending_pattern",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
 * @OA\Response(
 *    response=422,
 *    description="there is something wrong",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, there is something wrong. Please try again")
 *        )
 *     )
 * )
 */
 
     /**
 * @OA\Delete(
 * path="/deleteBroadcasts/{ids}",
 * summary="Delete Broadcasts",
 * description="Delete Broadcasts",
 * tags={"Broadcast"},
   * @OA\Parameter(
 *          name="host",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
   * @OA\Parameter(
 *          name="api_token",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="ids",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
 * @OA\Response(
 *    response=424,
 *    description="there is something wrong",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, there is something wrong. Please try again")
 *        )
 *     )
 * )
 */

    /**
 * @OA\POST(
 * path="/addCustomField",
 * summary="Add Custom Field",
 * description="Add Custom Field",
 * tags={"Custom Field"},
   * @OA\Parameter(
 *          name="host",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
   * @OA\Parameter(
 *          name="api_token",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="name",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
     * @OA\Parameter(
 *          name="type",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
     * @OA\Parameter(
 *          name="list_id",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
 * @OA\Response(
 *    response=422,
 *    description="there is something wrong",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, there is something wrong. Please try again")
 *        )
 *     )
 * )
 */

    /**
 * @OA\PUT(
 * path="/updateCustomField/{id}",
 * summary="Update Custom Field",
 * description="Update Custom Field",
 * tags={"Custom Field"},
   * @OA\Parameter(
 *          name="host",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
   * @OA\Parameter(
 *          name="api_token",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="id",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
 * @OA\Response(
 *    response=422,
 *    description="there is something wrong",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, there is something wrong. Please try again")
 *        )
 *     )
 * )
 */



    /**
 * @OA\Get(
 * path="/getListCustomFields/{id}",
 * summary="Get List Custom Fields",
 * description="Get List Custom Fields",
 * tags={"Custom Field"},
   * @OA\Parameter(
 *          name="host",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
   * @OA\Parameter(
 *          name="api_token",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="id",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
 * @OA\Response(
 *    response=422,
 *    description="there is something wrong",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, there is something wrong. Please try again")
 *        )
 *     )
 * )
 */
 
     /**
 * @OA\Delete(
 * path="/deleteCustomField/{id}/{force}",
 * summary="Delete Custom Field",
 * description="Delete Custom Field",
 * tags={"Custom Field"},
   * @OA\Parameter(
 *          name="host",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
   * @OA\Parameter(
 *          name="api_token",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="id",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
 * @OA\Response(
 *    response=425,
 *    description="there is something wrong",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, there is something wrong. Please try again")
 *        )
 *     )
 * )
 */

    /**
 * @OA\Get(
 * path="/getBroadcastStatsComplaints/{schedule_id}",
 * summary="Get Broadcast Complaint Stats",
 * description="Get Broadcast Complaint Stats",
 * tags={"Broadcast"},
   * @OA\Parameter(
 *          name="host",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
   * @OA\Parameter(
 *          name="api_token",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="schedule_id",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
 * @OA\Response(
 *    response=422,
 *    description="there is something wrong",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, there is something wrong. Please try again")
 *        )
 *     )
 * )
 */

    /**
 * @OA\Get(
 * path="/getCustomFields",
 * summary="Get Custom Fields",
 * description="Get Custom Fields",
 * tags={"Custom Field"},
   * @OA\Parameter(
 *          name="host",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
   * @OA\Parameter(
 *          name="api_token",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
 * @OA\Response(
 *    response=422,
 *    description="there is something wrong",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, there is something wrong. Please try again")
 *        )
 *     )
 * )
 */

    /**
 * @OA\POST(
 * path="/suppress",
 * summary="Suppress",
 * description="Suppress",
 * tags={"Suppress"},
   * @OA\Parameter(
 *          name="host",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
   * @OA\Parameter(
 *          name="api_token",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="reference",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="type",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
 * @OA\Response(
 *    response=422,
 *    description="there is something wrong",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, there is something wrong. Please try again")
 *        )
 *     )
 * )
 */

    /**
 * @OA\GET(
 * path="/getSuppressed",
 * summary="Get Suppressed",
 * description="Get Suppressed",
 * tags={"Suppress"},
   * @OA\Parameter(
 *          name="host",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
   * @OA\Parameter(
 *          name="api_token",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="type",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
 * @OA\Response(
 *    response=422,
 *    description="there is something wrong",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, there is something wrong. Please try again")
 *        )
 *     )
 * )
 */
 
    /**
 * @OA\Delete(
 * path="/deleteSuppressed/{type}",
 * summary="Delete Suppressed",
 * description="Delete Suppressed",
 * tags={"Suppress"},
   * @OA\Parameter(
 *          name="host",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
   * @OA\Parameter(
 *          name="api_token",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="type",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
 * @OA\Response(
 *    response=426,
 *    description="there is something wrong",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, there is something wrong. Please try again")
 *        )
 *     )
 * )
 */



    /**
 * @OA\POST(
 * path="/addBounceAddress",
 * summary="Add Bounce Address",
 * description="Add Bounce Address",
 * tags={"Bounce Address"},
   * @OA\Parameter(
 *          name="host",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
   * @OA\Parameter(
 *          name="api_token",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="email",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
     * @OA\Parameter(
 *          name="hostname",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
     * @OA\Parameter(
 *          name="port",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
     * @OA\Parameter(
 *          name="username",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
     * @OA\Parameter(
 *          name="method",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
 * @OA\Response(
 *    response=422,
 *    description="there is something wrong",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, there is something wrong. Please try again")
 *        )
 *     )
 * )
 */

    /**
 * @OA\PUT(
 * path="/updateBounceAddress/{id}",
 * summary="Update Bounce Address",
 * description="Update Bounce Address",
 * tags={"Bounce Address"},
   * @OA\Parameter(
 *          name="host",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
   * @OA\Parameter(
 *          name="api_token",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="id",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
 * @OA\Response(
 *    response=422,
 *    description="there is something wrong",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, there is something wrong. Please try again")
 *        )
 *     )
 * )
 */



    /**
 * @OA\GET(
 * path="/getBounceAddresses",
 * summary="Get Bounce Addresses",
 * description="Get Bounce Addresses",
 * tags={"Bounce Address"},
   * @OA\Parameter(
 *          name="host",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
   * @OA\Parameter(
 *          name="api_token",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="ids",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
 * @OA\Response(
 *    response=422,
 *    description="there is something wrong",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, there is something wrong. Please try again")
 *        )
 *     )
 * )
 */

    /**
 * @OA\Delete(
 * path="/deleteBounceAddresses/{ids}",
 * summary="Delete Bounce Addresses",
 * description="Delete Bounce Addresses",
 * tags={"Bounce Address"},
   * @OA\Parameter(
 *          name="host",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
   * @OA\Parameter(
 *          name="api_token",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
    * @OA\Parameter(
 *          name="ids",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
 * @OA\Response(
 *    response=429,
 *    description="there is something wrong",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, there is something wrong. Please try again")
 *        )
 *     )
 * )
 */















































}