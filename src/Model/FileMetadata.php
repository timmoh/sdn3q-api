<?php

namespace SDN3Q\Model;


class FileMetadata extends BaseModel {

   /**
    * Get the standard Picture of File
    *
    * @var \SDN3Q\Model\FilePicture
    * @JsonField(name="StandardFilePicture", type="\SDN3Q\Model\FilePicture")
    */
   public $standardFilePicture;

   /**
    * Meta Title
    *
    * @var string
    * @JsonField(name="Title", type="string")
    */
   public $title;

   /**
    * Meta Description
    *
    * @var string
    * @JsonField(name="Description", type="string")
    */
   public $description;

   /**
    * Display title (line 1)
    *
    * @var string
    * @JsonField(name="DisplayTitle", type="string")
    */
   public $displayTitle;

   /**
    * Display title (line 2)
    *
    * @var string
    * @JsonField(name="DisplayTitleSecondLine", type="string")
    */
   public $displayTitleSecondLine;

   /**
    * Meta Tags, comma separated
    *
    * @var string
    * @JsonField(name="Tags", type="string")
    */
   public $tags;

   /**
    * Meta Genre
    *
    * @var string
    * @JsonField(name="Genre", type="string")
    */
   public $genre;

   /**
    * Meta Studio
    *
    * @var string
    * @JsonField(name="Studio", type="string")
    */
   public $studio;


   /**
    * Publication from (date)
    *
    * @var \Datetime
    * @JsonField(name="IsPublicAt", type="\Datetime")
    */
   public $isPublicAt;

   /**
    * Publication until (date)
    *
    * @var \Datetime
    * @JsonField(name="IsPublicUntil", type="\Datetime")
    */
   public $isPublicUntil;


   /**
    * File Categories
    *
    * @var \SDN3Q\Model\Category[]
    * @JsonField(name="Category", type="\SDN3Q\Model\Category[]")
    */
   public $category;

   /**
    * Media Feeds
    *
    * @var \SDN3Q\Model\Share[]
    * @JsonField(name="Category", type="\SDN3Q\Model\Share[]")
    */
   public $share;


   /**
    * Meta Series
    *
    * @var string
    * @JsonField(name="Series", type="string")
    */
   public $series;

   /**
    * Meta Production Country
    *
    * @var string
    * @JsonField(name="ProductionCountry", type="string")
    */
   public $productionCountry;
   /**
    * Meta native Language
    *
    * @var string
    * @JsonField(name="NativeLanguage", type="string")
    */
   public $nativeLanguage;
   /**
    * Meta individual Program Id
    *
    * @var string
    * @JsonField(name="ProgramId", type="string")
    */
   public $programId;
   /**
    * Source of Video File
    *
    * @var string
    * @JsonField(name="Source", type="string")
    */
   public $source;

   /**
    *   Licensor of Video
    *
    * @var string
    * @JsonField(name="Licensor", type="string")
    */
   public $licensor;

   /**
    * License Area of Video File, comma separated
    *
    * @var string
    * @JsonField(name="LicenseArea", type="string")
    */
   public $licenseArea;

   /**
    * Relationship of Video File
    *
    * @var string
    * @JsonField(name="RelationShip", type="string")
    */
   public $relationShip;

   /**
    * Meta Rating
    *
    * @var float
    * @JsonField(name="Rating", type="float")
    */
   public $rating;

   /**
    * Geo Latitude
    *
    * @var float
    * @JsonField(name="Latitude", type="float")
    */
   public $latitude;

   /**
    * Geo Longitude
    *
    * @var float
    * @JsonField(name="Longitude", type="float")
    */
   public $longitude;

   /**
    * Videotype
    *
    * @var \SDN3Q\Model\FilePicture[]
    * @JsonField(name="StandardFilePicture", type="\SDN3Q\Model\FilePicture[]")
    */
   public $videotypee;

}