<?php
namespace SDN3Q\Request\Channels;
use SDN3Q\Request\BaseRequest;

/*
GET /api/v2/channels/{ChannelId}/metadata Return Metadata of a Channel
PUT /api/v2/channels/{ChannelId}/metadata Change Channel Metadata
PUT /api/v2/channels/{ChannelId}/metadata/boardpicture Put a ChannelMetadata BoardPicture
PUT /api/v2/channels/{ChannelId}/metadata/creditspicture Put a ChannelMetadata CreditsPicture
*/
class Metadata extends BaseRequest{
	protected static $endpoint ='channels';
	
	public static function getMetadata($channelId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
	
	public static function changeMetadata($channelId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
	
	public static function putBoardPicture($channelId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
	
	public static function putCreditsPicture($channelId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
}


