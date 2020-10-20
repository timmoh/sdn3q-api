<?php


namespace SDN3Q\Model;

use MintWare\DMM\DataField;

class ChannelMetaData extends BaseModel
{
    /**
     * Channel Title
     *
     * @var string
     * @DataField(name="Title", type="string")
     */
    public $title;

    /**
     * Description of the Channel
     *
     * @var string
     * @DataField(name="Description", type="string")
     */
    public $description;

    /**
     * Comma separated Tags of the Channel
     *
     * @var string
     * @DataField(name="Tags", type="string")
     */
    public $tag;

    /**
     * Title Player first line
     *
     * @var string
     * @DataField(name="DisplayTitle", type="string")
     */
    public $displayTitle;

    /**
     * Title Player second line
     *
     * @var string
     * @DataField(name="DisplayTitleSecondLine", type="string")
     */
    public $displayTitleSecondLine;

    /**
     * State of Player Embed Code
     *
     * @var string
     * @DataField(name="PlayoutState", type="string")
     */
    public $playoutState;

    /**
     * Show Channel Credits as lower third
     *
     * @var bool
     * @DataField(name="ShowChannelCredits", type="bool")
     */
    public $showChannelCredits;

    /**
     * Channel Credits first line
     *
     * @var string
     * @DataField(name="ChannelCredits", type="string")
     */
    public $channelCredits;

    /**
     * Channel credits second line
     *
     * @var string
     * @DataField(name="ChannelCreditsSecondLine", type="string")
     */
    public $channelCreditsSecondLine;

    /**
     * Channel Credits Logo URI
     *
     * @var string
     * @DataField(name="CreditsURI", type="string")
     */
    public $creditsURI;

    /**
     * Title of Board first line
     *
     * @var string
     * @DataField(name="BoardTitle", type="string")
     */
    public $boardTitle;

    /**
     * Title of Board second line
     *
     * @var string
     * @DataField(name="BoardTitleSecondLine", type="string")
     */
    public $boardTitleSecondLine;

    /**
     * DateTime of Countdouwn end
     *
     * @var \DateTime
     * @DataField(name="CountdownEnd", type="\DateTime")
     */
    public $countdownEnd;

    /**
     * Board Background Picture URI
     *
     * @var string
     * @DataField(name="BoardURI", type="string")
     */
    public $BoardUri;

    /**
     * Datetime of creation
     *
     * @var \DateTime
     * @DataField(name="CreatedAt", type="\DateTime")
     */
    public $CreatedAt;

    /**
     * Datetime of last update
     *
     * @var \DateTime
     * @DataField(name="LastUpdatedAt", type="\DateTime")
     */
    public $LastUpdatedAt;
}
