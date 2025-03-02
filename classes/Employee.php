<?php

class Employee
{
    private string $employeeID;
    private string $name;

    private string $nickname;

    // The agreed upon daily rate for work.
    private float $dailyRate;

    // Any money given to employee before payday.
    private float $loanedAmount;

    // Days that haven't been paid yet.
    private float $daysOwed;

    private array $dates_worked = [];

    public function __construct($employeeID, $name, $dailyRate, $daysOwed, $loanedAmount)
    {
        // Employee ID should be created after checking what is the last id within the database table: "Employee"
        $this->employeeID = $employeeID;
        $this->name = $name;
        $this->dailyRate = $dailyRate;
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

    public function getNickname(): string
    {
        return $this->nickname;
    }
    public function getdailyRate(): float
    {
        return $this->dailyRate;
    }

    public function getDaysOwed(): float
    {
        return $this->daysOwed;
    }

    public function getLoanedAmount(): float
    {
        return $this->loanedAmount;
    }

    public function getDatesWorked(): array {
        return $this->dates_worked;
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

    public function setNickname(string $nickname): void
    {
        $this->nickname = $nickname;
    }
    public function setdailyRate(float $dailyRate): void
    {
        $this->dailyRate = $dailyRate;
    }
    public function setDaysOwed(float $daysOwed): void
    {
        $this->daysOwed = $daysOwed;
    }
    public function setLoanedAmount(float $loanedAmount): void
    {
        $this->loanedAmount = $loanedAmount;
    }

    public function addWorkedDate(string $date): void
    {
        $this->dates_worked[] = $date;
    }

    // Standalone Functions:
    public function calculatePay(): float {
        return ($this->dailyRate * $this->daysOwed) - $this->loanedAmount;
    }
}