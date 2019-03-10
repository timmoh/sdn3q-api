<?php

namespace SDN3Q\Model;
use MintWare\DMM\DataField;

class FileMetadata extends BaseModel {

   /**
    * Get the standard Picture of File
    *
    * @var \SDN3Q\Model\FilePicture
    * @DataField(name="StandardFilePicture", type="\SDN3Q\Model\FilePicture")
    */
   public $standardFilePicture;

   /**
    * Meta Title
    *
    * @var string
    * @DataField(name="Title", type="string")
    */
   public $title;

   /**
    * Meta Description
    *
    * @var string
    * @DataField(name="Description", type="string")
    */
   public $description;

   /**
    * Display title (line 1)
    *
    * @var string
    * @DataField(name="DisplayTitle", type="string")
    */
   public $displayTitle;

   /**
    * Display title (line 2)
    *
    * @var string
    * @DataField(name="DisplayTitleSecondLine", type="string")
    */
   public $displayTitleSecondLine;

   /**
    * Meta Tags, comma separated
    *
    * @var string
    * @DataField(name="Tags", type="string")
    */
   public $tags;

   /**
    * Meta Genre
    *
    * @var string
    * @DataField(name="Genre", type="string")
    */
   public $genre;

   /**
    * Meta Studio
    *
    * @var string
    * @DataField(name="Studio", type="string")
    */
   public $studio;


   /**
    * Publication from (date)
    *
    * @var \Datetime
    * @DataField(name="IsPublicAt", type="\Datetime")
    */
   public $isPublicAt;

   /**
    * Publication until (date)
    *
    * @var \Datetime
    * @DataField(name="IsPublicUntil", type="\Datetime")
    */
   public $isPublicUntil;


   /**
    * File Categories
    *
    * @var \SDN3Q\Model\Category[]
    * @DataField(name="Category", type="\SDN3Q\Model\Category[]")
    */
   public $category;

   /**
    * Media Feeds
    *
    * @var \SDN3Q\Model\Share[]
    * @DataField(name="Category", type="\SDN3Q\Model\Share[]")
    */
   public $share;


   /**
    * Meta Series
    *
    * @var string
    * @DataField(name="Series", type="string")
    */
   public $series;

   /**
    * Meta Production Country
    *
    * @var string
    * @DataField(name="ProductionCountry", type="string")
    */
   public $productionCountry;
   /**
    * Meta native Language
    *
    * @var string
    * @DataField(name="NativeLanguage", type="string")
    */
   public $nativeLanguage;
   /**
    * Meta individual Program Id
    *
    * @var string
    * @DataField(name="ProgramId", type="string")
    */
   public $programId;
   /**
    * Source of Video File
    *
    * @var string
    * @DataField(name="Source", type="string")
    */
   public $source;

   /**
    *   Licensor of Video
    *
    * @var string
    * @DataField(name="Licensor", type="string")
    */
   public $licensor;

   /**
    * License Area of Video File, comma separated
    *
    * @var string
    * @DataField(name="LicenseArea", type="string")
    */
   public $licenseArea;

   /**
    * Relationship of Video File
    *
    * @var string
    * @DataField(name="RelationShip", type="string")
    */
   public $relationShip;

   /**
    * Meta Rating
    *
    * @var float
    * @DataField(name="Rating", type="float")
    */
   public $rating;

   /**
    * Geo Latitude
    *
    * @var float
    * @DataField(name="Latitude", type="float")
    */
   public $latitude;

   /**
    * Geo Longitude
    *
    * @var float
    * @DataField(name="Longitude", type="float")
    */
   public $longitude;

   /**
    * Videotype
    *
    * @var \SDN3Q\Model\VideoType[]
    * @DataField(name="Videotype", type="\SDN3Q\Model\VideoType[]")
    */
   public $videotype;

}