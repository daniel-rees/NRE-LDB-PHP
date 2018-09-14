<?php

namespace RailBoard;


interface LDBAbstract
{

    /**
     * [GetDepartureBoard description]
     * @param integer $numRows    [required, description]
     * @param string $crs         (alpha, 3 characters)
     * @param string $filterCrs   (alpha, 3 characters)
     * @param string $filterType  ("from" | "to")
     * @param integer $timeOffset (between -120 and 120)
     * @param integer $timeWindow (between -120 and 120)
     * @return StationBoard
     */
    public function GetDepartureBoard($numRows, $crs, $filterCrs, $filterType, $timeOffset, $timeWindow);


    /**
     * [GetDepBoardWithDetails description]
     * @param integer $numRows    [required, description]
     * @param string $crs         (alpha, 3 characters)
     * @param string $filterCrs   (alpha, 3 characters)
     * @param string $filterType  ("from" | "to")
     * @param integer $timeOffset (between -120 and 120)
     * @param integer $timeWindow (between -120 and 120)
     * @return StationBoardWithDetails
     */
    public function GetDepBoardWithDetails($numRows, $crs, $filterCrs, $filterType, $timeOffset, $timeWindow);



    /**
     * [GetArrivalBoard description]
     * @param integer $numRows    [required, description]
     * @param string $crs         (alpha, 3 characters)
     * @param string $filterCrs   (alpha, 3 characters)
     * @param string $filterType  ("from" | "to")
     * @param integer $timeOffset (between -120 and 120)
     * @param integer $timeWindow (between -120 and 120)
     * @return StationBoard
     */
    public function GetArrivalBoard($numRows, $crs, $filterCrs, $filterType, $timeOffset, $timeWindow);


    /**
     * [GetDepBoardWithDetails description]
     * @param integer $numRows    [required, description]
     * @param string $crs         (alpha, 3 characters)
     * @param string $filterCrs   (alpha, 3 characters)
     * @param string $filterType  ("from" | "to")
     * @param integer $timeOffset (between -120 and 120)
     * @param integer $timeWindow (between -120 and 120)
     * @return StationBoardWithDetails
     */
    public function GetArrBoardWithDetails($numRows, $crs, $filterCrs, $filterType, $timeOffset, $timeWindow);



    /**
     * [GetDepBoardWithDetails description]
     * @param integer $numRows    [required, description]
     * @param string $crs         (alpha, 3 characters)
     * @param string $filterCrs   (alpha, 3 characters)
     * @param string $filterType  ("from" | "to")
     * @param integer $timeOffset (between -120 and 120)
     * @param integer $timeWindow (between -120 and 120)
     * @return StationBoard
     */
    public function GetArrivalDepartureBoard($numRows, $crs, $filterCrs, $filterType, $timeOffset, $timeWindow);


    /**
     * [GetDepBoardWithDetails description]
     * @param integer $numRows    [required, description]
     * @param string $crs         (alpha, 3 characters)
     * @param string $filterCrs   (alpha, 3 characters)
     * @param string $filterType  ("from" | "to")
     * @param integer $timeOffset (between -120 and 120)
     * @param integer $timeWindow (between -120 and 120)
     * @return StationBoardWithDetails
     */
    public function GetArrDepBoardWithDetails($numRows, $crs, $filterCrs, $filterType, $timeOffset, $timeWindow);



    /**
     * [GetNextDepartures description]
     * @param string $crs         (alpha, 3 characters)
     * @param array $filterList   (alpha, 3 characters)
     * @param integer $timeOffset (between -120 and 120)
     * @param integer $timeWindow (between -120 and 120)
     * @return DeparturesBoard
     */
    public function GetNextDepartures($crs, $filterList, $timeOffset, $timeWindow);


    /**
     * [GetNextDepartures description]
     * @param string $crs         (alpha, 3 characters)
     * @param array $filterList   (alpha, 3 characters)
     * @param integer $timeOffset (between -120 and 120)
     * @param integer $timeWindow (between -120 and 120)
     * @return DeparturesBoardWithDetails
     */
    public function GetNextDeparturesWithDetails($crs, $filterList, $timeOffset, $timeWindow);



    /**
     * [GetNextDepartures description]
     * @param string $crs         (alpha, 3 characters)
     * @param array $filterList   (alpha, 3 characters)
     * @param integer $timeOffset (between -120 and 120)
     * @param integer $timeWindow (between -120 and 120)
     * @return DeparturesBoard
     */
    public function GetFastestDepartures($crs, $filterList, $timeOffset, $timeWindow);


    /**
     * [GetNextDepartures description]
     * @param string $crs         (alpha, 3 characters)
     * @param array $filterList   (alpha, 3 characters)
     * @param integer $timeOffset (between -120 and 120)
     * @param integer $timeWindow (between -120 and 120)
     * @return DeparturesBoardWithDetails
     */
    public function GetFastestDeparturesWithDetails($crs, $filterList, $timeOffset, $timeWindow);



    /**
     * [GetFastestDeparturesWithDetails description]
     * @param string $serviceID
     * @return ServiceDetails
     */
    public function GetServiceDetails($serviceID);

}
