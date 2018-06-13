<?php

// Desafio 5: Refatore essas interfaces em uma estrutura mais sensível (adicione novas interfaces onde é necessário)

interface FlightBookingSystemInterface
{
    public function getAllAirports();
}

interface AirportInterface
{
	public function getPossibleDestinationAirports();
	public function getDepartureTimes(AirportInterface $destination);
}

interface UserInterface
{

}

interface FlightInterface
{
	public function __construct(AirportInterface $origin, AirportInterface $destination, $time);
	public function getCost(UserInterface $user);
	public function book(UserInterface $user, $cost);
}
