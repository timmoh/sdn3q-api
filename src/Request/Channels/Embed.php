<?php
namespace SDN3Q\Request\Channels;
use SDN3Q\Request\BaseRequest;

/*
GET /api/v2/channels/{ChannelId}/embed Return the Embed Codes of a Channel
/api/v2/channels/{ChannelId}/embedstate
GET /api/v2/channels/{ChannelId}/embedstate Return the Playout State of Channels Embed Code
PUT /api/v2/channels/{ChannelId}/embedstate Change Playout State of Channels Embed Code
*/
class Embed extends BaseRequest{
	protected static $endpoint ='channels';
	
	public static function getEmbed($channelId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
	
	public static function getEmbedState($channelId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
	
	public static function changeEmbedState($channelId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
}

