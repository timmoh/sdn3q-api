<?php


namespace SDN3Q\Model;
use MintWare\JOM\JsonField;


class ChannelMetaData extends BaseModel {


	/**
	 * Channel Title
	 *
	 * @var string
	 * @JsonField(name="Title", type="string")
	 */
	public $title;


	/**
	 * Description of the Channel
	 *
	 * @var string
	 * @JsonField(name="Description", type="string")
	 */
	public $description;

	/**
	 * Comma separated Tags of the Channel
	 *
	 * @var string
	 * @JsonField(name="Tags", type="string")
	 */
	public $tag;

	/**
	 * Title Player first line
	 *
	 * @var string
	 * @JsonField(name="DisplayTitle", type="string")
	 */
	public $displayTitle;

	/**
	 * Title Player second line
	 *
	 * @var string
	 * @JsonField(name="DisplayTitleSecondLine", type="string")
	 */
	public $displayTitleSecondLine;

	/**
	 * State of Player Embed Code
	 *
	 * @var string
	 * @JsonField(name="PlayoutState", type="string")
	 */
	public $playoutState;

	/**
	 * Show Channel Credits as lower third
	 *
	 * @var bool
	 * @JsonField(name="ShowChannelCredits", type="bool")
	 */
	public $showChannelCredits;

	/**
	 * Channel Credits first line
	 *
	 * @var string
	 * @JsonField(name="ChannelCredits", type="string")
	 */
	public $channelCredits;

	/**
	 * Channel credits second line
	 *
	 * @var string
	 * @JsonField(name="ChannelCreditsSecondLine", type="string")
	 */
	public $channelCreditsSecondLine;

	/**
	 * Channel Credits Logo URI
	 *
	 * @var string
	 * @JsonField(name="CreditsURI", type="string")
	 */
	public $creditsURI;

	/**
	 * Title of Board first line
	 *
	 * @var string
	 * @JsonField(name="BoardTitle", type="string")
	 */
	public $boardTitle;

	/**
	 * Title of Board second line
	 *
	 * @var string
	 * @JsonField(name="BoardTitleSecondLine", type="string")
	 */
	public $boardTitleSecondLine;

	/**
	 * DateTime of Countdouwn end
	 *
	 * @var \DateTime
	 * @JsonField(name="CountdownEnd", type="\DateTime")
	 */
	public $countdownEnd;


	/**
	 * Board Background Picture URI
	 *
	 * @var string
	 * @JsonField(name="BoardURI", type="string")
	 */
	public $BoardUri;

	/**
	 * Datetime of creation
	 *
	 * @var \DateTime
	 * @JsonField(name="CreatedAt", type="\DateTime")
	 */
	public $CreatedAt;

	/**
	 * Datetime of last update
	 *
	 * @var \DateTime
	 * @JsonField(name="LastUpdatedAt", type="\DateTime")
	 */
	public $LastUpdatedAt;


}