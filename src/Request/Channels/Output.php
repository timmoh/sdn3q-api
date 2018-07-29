<?php
namespace SDN3Q\Request\Channels;
use SDN3Q\Request\BaseRequest;

/*
GET /api/v2/channels/{ChannelId}/output Return Output URIs of a Channel
*/
class Output extends BaseRequest{
	protected static $endpoint ='channels';
	
	public static function getOutput($channelId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
}
