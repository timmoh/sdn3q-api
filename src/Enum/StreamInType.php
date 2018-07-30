<?php

namespace SDN3Q\Enum;

class StreamInType {
	const RTMPPUSH       = 'rtmp-push'; //	RTMP PUSH	Type:Video	StreamInURI required:no
	const RTMPPUSHDVR    = 'rtmp-push-dvr'; //	RTMP PUSH with DVR	Type:Video	StreamInURI required:no
	const RTMPPUSHLOW    = 'rtmp-push-low'; //	RTMP PUSH with Low Latency	Type:Video	StreamInURI required:no
	const SRT            = 'srt'; //	SRT push	Type:Video	StreamInURI required:no
	const MPEGTS         = 'mpeg-ts'; //	MPEG-TS push	Type:Video	StreamInURI required:no
	const HLS            = 'hls'; //	HLS pull with DVR	Type:Video	StreamInURI required:yes
	const HTTPPUSH       = 'http-push'; //	HTTP Push	Type:Audio	StreamInURI required:no
	const ICECASTRELAY   = 'icecast-relay'; //	Icecast Relay	Type:Audio	StreamInURI required:yes
	const SHOUTCASTRELAY = 'shoutcast-relay'; //	Shoutcast Relay	Type:Audio	StreamInURI required:yes


}