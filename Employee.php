<?php

class Employee
{
    private string $employeeID;
    private string $name;

    private string $nickname;

    // The agreed upon daily rate for work.
    private float $hourlyRate;

    // Any money given to employee before payday.
    private float $loanedAmount;

    // Days that haven't been paid yet.
    private float $daysOwed;

    private array $dates_worked = [
        ['day_number' => 1, 'day_name' => "sunday", 'month_number' => 2, 'month_name' => "january", 'year_number' => 2025],
        ];

    public function __construct($employeeID, $name, $hourlyRate, $daysOwed, $loanedAmount)
    {
        // Employee ID should be created after checking what is the last id within the database table: "Employee"
        $this->employeeID = $employeeID;
        $this->name = $name;
        $this->hourlyRate = $hourlyRate;
        $this->daysOwed = $daysOwed;
        $this->loanedAmount = $loanedAmount;
    }

    // Getters:
    public function getEmployeeID(): string
    {
        return $this->employeeID;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getHourlyRate(): float
    {
        return $this->hourlyRate;
    }

    public function getDaysOwed(): float
    {
        return $this->daysOwed;
    }

    public function getLoanedAmount(): float
    {
        return $this->loanedAmount;
    }

    // Setters:
    public function setEmployeeID(string $employeeID): void
    {
        $this->employeeID = $employeeID;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function setHourlyRate(float $hourlyRate): void
    {
        $this->hourlyRate = $hourlyRate;
    }
    public function setDaysOwed(float $daysOwed): void
    {
        $this->daysOwed = $daysOwed;
    }
    public function setLoanedAmount(float $loanedAmount): void
    {
        $this->loanedAmount = $loanedAmount;
    }

    // Standalone Functions:
    public function calculatePay(): float {
        return ($this->hourlyRate * $this->daysOwed) - $this->loanedAmount;
    }
}