<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Flight
 *
 * @ORM\Table(name="flight", indexes={@ORM\Index(name="flight_arrival_fk", columns={"arrival_airport"}), @ORM\Index(name="flight_departure_fk", columns={"departure_airport"}), @ORM\Index(name="flight_pilot_fk", columns={"main_pilot"})})
 * @ORM\Entity
 */
class Flight
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="departure_datetime", type="datetime", nullable=true)
     */
    private $departureDatetime;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="arrival_departure", type="datetime", nullable=true)
     */
    private $arrivalDeparture;

    /**
     * @var \Airport
     *
     * @ORM\ManyToOne(targetEntity="Airport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="arrival_airport", referencedColumnName="id")
     * })
     */
    private $arrivalAirport;

    /**
     * @var \Airport
     *
     * @ORM\ManyToOne(targetEntity="Airport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="departure_airport", referencedColumnName="id")
     * })
     */
    private $departureAirport;

    /**
     * @var \Pilot
     *
     * @ORM\ManyToOne(targetEntity="Pilot")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="main_pilot", referencedColumnName="id")
     * })
     */
    private $mainPilot;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return \DateTime|null
     */
    public function getDepartureDatetime(): ?\DateTime
    {
        return $this->departureDatetime;
    }

    /**
     * @param \DateTime|null $departureDatetime
     */
    public function setDepartureDatetime(?\DateTime $departureDatetime): void
    {
        $this->departureDatetime = $departureDatetime;
    }

    /**
     * @return \DateTime|null
     */
    public function getArrivalDeparture(): ?\DateTime
    {
        return $this->arrivalDeparture;
    }

    /**
     * @param \DateTime|null $arrivalDeparture
     */
    public function setArrivalDeparture(?\DateTime $arrivalDeparture): void
    {
        $this->arrivalDeparture = $arrivalDeparture;
    }

    /**
     * @return \Airport
     */
    public function getArrivalAirport(): \Airport
    {
        return $this->arrivalAirport;
    }

    /**
     * @param \Airport $arrivalAirport
     */
    public function setArrivalAirport(\Airport $arrivalAirport): void
    {
        $this->arrivalAirport = $arrivalAirport;
    }

    /**
     * @return \Airport
     */
    public function getDepartureAirport(): \Airport
    {
        return $this->departureAirport;
    }

    /**
     * @param \Airport $departureAirport
     */
    public function setDepartureAirport(\Airport $departureAirport): void
    {
        $this->departureAirport = $departureAirport;
    }

    /**
     * @return \Pilot
     */
    public function getMainPilot(): \Pilot
    {
        return $this->mainPilot;
    }

    /**
     * @param \Pilot $mainPilot
     */
    public function setMainPilot(\Pilot $mainPilot): void
    {
        $this->mainPilot = $mainPilot;
    }

}
