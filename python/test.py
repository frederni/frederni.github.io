print("This is written in Python!")

try:
    import numpy as np
except Exception as e:
    print("aiai", e)

try:
    print(np.array([[1,2,3],[4,5,6],[7,8,9]]))
except Exception as e:
    print("whoopsie", e)