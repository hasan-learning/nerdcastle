using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace W13_OneToOne
{
    public class Employee
    {
        public Employee(string name, string email, string code)
        {
            Name = name;
            Email = email;
            Code = code;
        }

        public string Name { set; get; }
        public string Email { set; get; }
        public string Code { set; get; }
        public Address PresentAddress { set; get; }
    }
}
