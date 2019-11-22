using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace SolutionOfPractice1
{
    class Salary
    {
        public double Basic { set; get; }
        public double ConveyancePercent { set; get; }
        public double MedicalPercent { set; get; }

        public double GetTotal()
        {
            return Basic + GetMedicalAmount() + GetConveyanceAmount();
        }

        public double GetConveyanceAmount()
        {
            double amount = (Basic * ConveyancePercent) / 100.0;
            return amount;
        }

        public double GetMedicalAmount()
        {
            double amount = (Basic * MedicalPercent) / 100.0;
            return amount;        
        }


    }
}
