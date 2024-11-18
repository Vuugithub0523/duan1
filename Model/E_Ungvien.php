<?php
    include_once("E_User");
    class E_Ungvien extends E_Student {
        public $jobPosition;
        public $experience;
    
        public function __construct($id, $name, $age, $university, $jobPosition, $experience) {
            // Gọi constructor của lớp cha (E_Student)
            parent::__construct($id, $name, $age, $university);
            $this->jobPosition = $jobPosition;
            $this->experience = $experience;
        }
    
        public function getJobInfo() {
            return "Ứng viên {$this->name}, ứng tuyển vị trí {$this->jobPosition}, có {$this->experience} năm kinh nghiệm.";
        }
    }
?>