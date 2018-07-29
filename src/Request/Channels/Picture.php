<?php
namespace SDN3Q\Request\Channels;

use SDN3Q\Request\BaseRequest;

/*
GET /api/v2/channels/{ChannelId}/picture Return Channel Picture
PUT /api/v2/channels/{ChannelId}/picture Put a Channel Picture
*/
class Picture extends BaseRequest{
	protected static $endpoint ='channels';
	
	public static function getPicture($channelId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
	
	public static function putPicture($channelId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
	
}


