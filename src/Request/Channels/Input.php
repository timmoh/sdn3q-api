<?php
namespace SDN3Q\Request\Channels;
use SDN3Q\Request\BaseRequest;

/*
GET /api/v2/channels/{ChannelId}/input Return Input of a Channel
PUT /api/v2/channels/{ChannelId}/input Change Channel Input
*/
class Input extends BaseRequest{
	protected static $endpoint ='channels';
	
	public static function getInput($channelId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
	
	public static function changeInput($channelId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
}

