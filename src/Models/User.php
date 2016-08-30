<?php

namespace Creaturemyst\Models;

use Creaturemyst\VekaEsdeka\Interfaces\EntityInterface;

class User implements EntityInterface
{
    const
        SEX_UNKNOWN = 0,
        SEX_FEMALE = 1,
        SEX_MALE = 2;

    // Default fields
    protected $uid;
    protected $firstName;
    protected $lastName;
    protected $deactivated;
    protected $hidden;

    // Optional fields
    protected $verified;
    protected $sex = self::SEX_UNKNOWN;
    protected $bdate;
    protected $city;
    protected $country;
    protected $homeTown;
    protected $photo50;
    protected $photo100;
    protected $photo200;
    protected $photoMax;
    protected $online;
    protected $domain;
    protected $hasMobile;
    protected $site;
    protected $status;
    protected $lastSeen;
    protected $nickname;
    protected $timezone;
    protected $screenName;

    protected $isPersisted = false;

    /**
     * @return integer
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param integer $uid
     * @return User
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeactivated()
    {
        return $this->deactivated;
    }

    /**
     * @param mixed $deactivated
     * @return User
     */
    public function setDeactivated($deactivated)
    {
        $this->deactivated = $deactivated;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * @param mixed $hidden
     * @return User
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVerified()
    {
        return $this->verified;
    }

    /**
     * @param mixed $verified
     * @return User
     */
    public function setVerified($verified)
    {
        $this->verified = $verified;
        return $this;
    }

    /**
     * @return int
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param int $sex
     * @return User
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBdate()
    {
        return $this->bdate;
    }

    /**
     * @param mixed $bdate
     * @return User
     */
    public function setBdate($bdate)
    {
        $this->bdate = $bdate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     * @return User
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     * @return User
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHomeTown()
    {
        return $this->homeTown;
    }

    /**
     * @param mixed $homeTown
     * @return User
     */
    public function setHomeTown($homeTown)
    {
        $this->homeTown = $homeTown;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhoto50()
    {
        return $this->photo50;
    }

    /**
     * @param mixed $photo50
     * @return User
     */
    public function setPhoto50($photo50)
    {
        $this->photo50 = $photo50;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhoto100()
    {
        return $this->photo100;
    }

    /**
     * @param mixed $photo100
     * @return User
     */
    public function setPhoto100($photo100)
    {
        $this->photo100 = $photo100;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhoto200()
    {
        return $this->photo200;
    }

    /**
     * @param mixed $photo200
     * @return User
     */
    public function setPhoto200($photo200)
    {
        $this->photo200 = $photo200;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhotoMax()
    {
        return $this->photoMax;
    }

    /**
     * @param mixed $photoMax
     * @return User
     */
    public function setPhotoMax($photoMax)
    {
        $this->photoMax = $photoMax;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOnline()
    {
        return $this->online;
    }

    /**
     * @param mixed $online
     * @return User
     */
    public function setOnline($online)
    {
        $this->online = $online;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param mixed $domain
     * @return User
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHasMobile()
    {
        return $this->hasMobile;
    }

    /**
     * @param mixed $hasMobile
     * @return User
     */
    public function setHasMobile($hasMobile)
    {
        $this->hasMobile = $hasMobile;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * @param mixed $site
     * @return User
     */
    public function setSite($site)
    {
        $this->site = $site;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     * @return User
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastSeen()
    {
        return $this->lastSeen;
    }

    /**
     * @param mixed $lastSeen
     * @return User
     */
    public function setLastSeen($lastSeen)
    {
        $this->lastSeen = $lastSeen;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @param mixed $nickname
     * @return User
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * @param mixed $timezone
     * @return User
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getScreenName()
    {
        return $this->screenName;
    }

    /**
     * @param mixed $screenName
     * @return User
     */
    public function setScreenName($screenName)
    {
        $this->screenName = $screenName;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function isPersisted() : boolean
    {
        return $this->isPersisted;
    }

    /**
     * @inheritdoc
     */
    public function setIsPersisted(boolean $isPersisted) : EntityInterface
    {
        $this->isPersisted = $isPersisted;
        return $this;
    }
}
