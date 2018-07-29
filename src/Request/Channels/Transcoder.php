<?php
namespace SDN3Q\Request\Channels;
use SDN3Q\Request\BaseRequest;

/*
GET /api/v2/channels/{ChannelId}/formats Return available Channel Transcoder Formats
/api/v2/channels/{ChannelId}/formats/{ChannelFormatId}
LINK /api/v2/channels/{ChannelId}/formats/{ChannelFormatId} Add (link) a ChannelFormat to a Channel and create a new Transcoder
UNLINK /api/v2/channels/{ChannelId}/formats/{ChannelFormatId} Remove (unlink) a ChannelFormat from a Channel and remove the Transcoder
/api/v2/channels/{ChannelId}/transcoders
GET /api/v2/channels/{ChannelId}/transcoders Return enabled Channel Transcoders
*/
class Transcoder extends BaseRequest{
	protected static $endpoint ='channels';
	
	public static function getFormats($channelId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
	
	
	
	public static function linkFormat($channelId,$channelFormatId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
	
	public static function unlinkFormat($channelId,$channelFormatId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
	
	public static function getTranscoder($channelId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
}
