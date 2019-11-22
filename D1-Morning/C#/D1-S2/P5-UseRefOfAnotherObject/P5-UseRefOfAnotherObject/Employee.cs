using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace SolutionOfPractice1
{
    class Employee
    {
        public string Id { set; get; }
        public string Name { set; get; }
        public string Email { set; get; }

        //Following three data is related to employee salary
        //Instead of repeating these, we should use Salary class here.
        //So, Replace these using Salary class
        public double Basic { set; get; }
        public double ConveyancePercent { set; get; }
        public double MedicalPercent { set; get; }
        
    }
}
