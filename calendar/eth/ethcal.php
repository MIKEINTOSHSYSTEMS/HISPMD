<?php
/*
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.

 * Contact Me : mikeintoshsys@gmail.com
 * Phone: +251913391985
 *
 * ALL THE ABOVE COPYRIGHT NOTICE SHALL BE INCLUDED IN ALL COPIES OR SUBSTANTIAL PORTIONS OF THE SOFTWARE.
 *
 */

class EthiopianCalendar
{
    private int $year;
    private int $month;
    private int $day;
    private int $leap_year;

    private int $EC_year;
    private int $EC_month;
    private int $EC_day;

    private int $GCDate;

    const FIVE = 5;
    const SIX = 6;

    private const GregorianMonthLength = array(31, array(true => 29, false => 28), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
    private const EthiopianMonth = array(5, 6, 7, 8, 9, 10, 11, 12, 1, 2, 3, 4);

    private const GregorianMonthName = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
    private const EthiopianMonthName = array("መስከረም", "ጥቅምት", "ህዳር", "ታህሳስ", "ጥር", "የካቲት", "መጋቢት", "ሚያዚያ", "ግንቦት", "ሰኔ", "ሐምሌ", "ነሀሴ", "ጳጉሜ");

    private const GregorianDayName = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
    private const EthiopianDayName = array("ሰኞ", "ማክሰኞ", "ረቡዕ", "ሐሙስ", "ዓርብ", "ቅዳሜ", "እሁድ");

    private const WEEK_DAY_LIST = array("Monday" => 0, "Tuesday" => -1, "Wednesday" => -2, "Thursday" => -3, "Friday" => -4, "Saturday" => -5, "Sunday" => -6);

    private const MonthDifference = array(8, 7, 9, 8, 8, 7, 7, 6, array(5 => 5, 6 => 6), array(5 => 10, 6 => 11), array(5 => 9, 6 => 10), array(5 => 9, 6 => 10),);
    private bool $Converted = false;

    public function __construct($date)
    {
        $str_time = strtotime($date);

        $this->year = date('Y', $str_time);
        $this->month = date('m', $str_time);
        $this->day = date('d', $str_time);

        if ($this->year > 0 && $this->month > 0 && $this->month <= 12 && $this->day > 0 && $this->day <= $this->GCMonthLength()) {
            $this->SetLeapYear();

            $EC_year = $this->year - $this->YearDifference();
            $EC_month = self::EthiopianMonth[$this->month - 1];

            if ($this->month >= 9 && $this->month <= 12) {
                if ($this->month == 9) {
                    $EC_day = $this->day - (self::MonthDifference[$this->month - 1][$this->leap_year] + $this->leap_year + $this->LeapYearAddition());
                    if ($EC_day >= -5 && $EC_day <= 0) {
                        $EC_day += 6;
                        $EC_month = 13;
                    } elseif ($EC_day < -5) {
                        $EC_day += 6;
                    }
                } else {
                    $EC_day = $this->day - (self::MonthDifference[$this->month - 1][$this->leap_year]);
                }
            } else {
                $EC_day = $this->day - self::MonthDifference[$this->month - 1];
            }

            if ($EC_day <= 0) {
                $EC_day = 30 + $EC_day;
                $EC_month = self::EthiopianMonth[$this->month - 2] ?? self::EthiopianMonth[($this->month - 2) + count(self::EthiopianMonth)];
            }

            $this->EC_year = $EC_year;
            $this->EC_month = $EC_month;
            $this->EC_day = $EC_day;

            $this->Converted = true;

            $this->GCDate = strtotime("$this->year-$this->month-$this->day");
        }
    }

    private function SetLeapYear()
    {
        $leap_year_division = ($this->year - 11) / 4;

        if (is_int($leap_year_division)) {
            $this->leap_year = self::SIX;
        } else {
            $this->leap_year = self::FIVE;
        }
    }

    private function YearDifference(): int
    {
        if ($this->month == 9) {
            if (($this->day >= 11 && $this->leap_year == self::FIVE) || ($this->day >= 12 && $this->leap_year == self::SIX)) {
                return 7;
            } else {
                return 8;
            }
        } elseif ($this->month > 9) {
            return 7;
        } else {
            return 8;
        }
    }

    private function LeapYearAddition(): int
    {
        if ($this->leap_year == self::FIVE) {
            return +1;
        } elseif ($this->leap_year == self::SIX) {
            return -1;
        } else {
            return 1;
        }
    }

    private function AddZero($int): string
    {
        if (strlen($int) == 1) {
            return "0$int";
        } else {
            return $int;
        }
    }

    private function EC_date_format($format)
    {
        if ($this->Converted) {
            $format = str_replace("Y", $this->EC_year, $format);
            $format = str_replace("y", substr($this->EC_year, 2, 2), $format);

            $format = str_replace("M", self::EthiopianMonthName[$this->EC_month - 1], $format);
            $format = str_replace("m", $this->AddZero($this->EC_month), $format);

            $format = str_replace("d", $this->AddZero($this->EC_day), $format);

            $GC_day_name = $this->GetGCDate('D');
            $day = 0;
            foreach (self::GregorianDayName as $EC_day_full_name) {
                if ($GC_day_name == substr($EC_day_full_name, 0, 3)) {
                    $format = str_replace("D", self::EthiopianDayName[$day], $format);
                    break;
                }
                $day++;
            }

            return $format;
        } else {
            return "";
        }
    }

    private function GCMonthLength(): int
    {
        if ($this->month == 2) {
            return self::GregorianMonthLength[$this->month - 1][is_int($this->year / 4)];
        } else {
            return self::GregorianMonthLength[$this->month - 1];
        }
    }

    private function MatchDay($count_day, $today_int, $return_true, $return_false = ""): string
    {
        if ($count_day == $today_int) {
            return $return_true;
        } else {
            return $return_false;
        }
    }

    public function GetLeapYear()
    {
        if ($this->Converted) {
            return $this->leap_year;
        } else {
            return "";
        }
    }

    public function GetECDate($format): string
    {
        if ($this->Converted) {
            return $this->EC_date_format($format);
        } else {
            return "";
        }
    }

    public function GetECMonthLength(): int
    {
        if ($this->Converted) {
            if ($this->EC_month == 13) {
                return $this->leap_year;
            } else {
                return 30;
            }
        } else {
            return 0;
        }
    }

    public function GetGCDate($format): string
    {
        if ($this->Converted) {
            return date($format, $this->GCDate);
        } else {
            return "";
        }
    }

    public function GetGCMonthFullName(): string
    {
        if ($this->Converted) {
            $month = "";
            $GC_month_name = $this->GetGCDate('M');
            foreach (self::GregorianMonthName as $GC_month_full_name) {
                if ($GC_month_name == substr($GC_month_full_name, 0, 3)) {
                    $month = $GC_month_full_name;
                    break;
                }
            }

            return $month;
        } else {
            return "";
        }
    }

    public function GetGCDayFullName(): string
    {
        if ($this->Converted) {
            $day = "";
            $GC_day_name = $this->GetGCDate('D');
            foreach (self::GregorianDayName as $GC_day_full_name) {
                if ($GC_day_name == substr($GC_day_full_name, 0, 3)) {
                    $day = $GC_day_full_name;
                    break;
                }
            }

            return $day;
        } else {
            return "";
        }
    }

    public function GetGCMonthLength(): int
    {
        if ($this->Converted) {
            return $this->GCMonthLength();
        } else {
            return 0;
        }
    }

    public function ECDrawCalendar()
    {
        if ($this->Converted) {
            echo "<table class='calendar'><tr> </tr>";

            echo "</tr><tr><td class='today' colspan='7'>" . $this->GetECDate('Y-m-d / D M d Yዓ.ም') . "</td></tr></table>";
        }
    }

    public function GCDrawCalendar()
    {
        if ($this->Converted) {
            echo "<table class='calendar'><tr> </tr>";


            echo "</tr><tr><td class='today' colspan='7'>" . $this->GetGCDate('Y-m-d / ') . $this->GetGCDayFullName() . " " . $this->GetGCMonthFullName() . $this->GetGCDate(" d Y") . "</td></tr></table>";
        }
    }
}