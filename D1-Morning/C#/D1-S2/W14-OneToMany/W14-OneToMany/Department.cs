using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace W14_OneToMany
{
    public class Department
    {
        public string Code { set; get; }
        public string Name { set; get; }

        public List<Student> StudentList = new List<Student>();
        public Department()
        { 

        }
        public Department(string code, string name)
        {
            Code = code;
            Name = name;
        }
    }
}
